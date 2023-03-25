<?php
declare(strict_types=1);

require_once "./app/controllers/userController.php";

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$req = $_SERVER["REQUEST_URI"];
$userManager = new UserController;

switch ($req) {
    case "/blogapi/register":
        http_response_code(200);
        header("Content-Type: text/plain");
        if (isset($_POST["email"]) &&
            isset($_POST["firstName"]) &&
            isset($_POST["lastName"]) &&
            isset($_POST["password"])
        ) {
            if ($userManager->registerUser($_POST)) {
                echo "Registered successfully!";
            } else {
                echo "An error occured during registration!";
            }

        } else {
            echo "Welcome to the register endpoint.";
        }
        break;
    case "/blogapi/login":
        http_response_code(200);
        header("Content-Type: text/plain");
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $user = $userManager->loginUser($_POST);
            if ($user) {
                echo "Logged in successfully!";
            } else {
                echo "Incorrect combination!";
            }
        } else {
            echo "Welcome to the login endpoint.";
        }
        break;
    default:
        require_once "./app/views/app.php";
}
?>
