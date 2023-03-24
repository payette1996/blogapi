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
        header('Content-Type: text/plain');
        if (isset($_POST['email']) &&
            isset($_POST['firstName']) &&
            isset($_POST['lastName']) &&
            isset($_POST['password'])
        ) {
            $email = $_POST['email'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $password = $_POST['password'];

            if ($userManager->registerUser($email, $firstName, $lastName, $password)) {
                echo "Registered successfully!";
            } else {
                echo "An error occured during registration!";
            }

        } else {
            echo "Welcome to the register endpoint";
        }
        break;
    case "/blogapi/login":
        http_response_code(200);
        header('Content-Type: text/plain');
        if (isset($_POST['email'])) {
            echo "Login request for : {$_POST['email']}";
        } else {
            echo "Welcome to the login endpoint";
        }
        break;
    default:
        require_once "./app/views/app.php";
}
?>
