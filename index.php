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
        $json = file_get_contents("php://input");
        $array = json_decode($json, true);

        http_response_code(200);
        header("Content-Type: application/json");
        if ($userManager->registerUser($array)) {
            $data = ["registered" => true];
        } else {
            $data = ["registered" => false];
        }
        echo json_encode($data);

        break;

    case "/blogapi/login":
        $json = file_get_contents("php://input");
        $array = json_decode($json, true);

        http_response_code(200);
        header("Content-Type: application/json");
        $user = $userManager->loginUser($array);
        if ($user) {
            $data = ["authenticated" => true];
        } else {
            $data = ["authenticated" => false];
        }
        echo json_encode($data);
        break;
    case "/blogapi/logout":
        session_unset();
        session_destroy();
        http_response_code(200);
        break;

    default:
        require_once "./app/views/app.php";
}
?>