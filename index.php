<?php
declare(strict_types=1);

require_once "./app/models/databaseClass.php";
require_once "./app/controllers/userController.php";
require_once "./app/controllers/blogController.php";
require_once "./app/controllers/postController.php";

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$request = $_SERVER["REQUEST_URI"];
$sections = explode("/", $request);
$resource = isset($sections[2]) ? $sections[2] : null;
$id = isset($sections[3]) ? $sections[3] : null;
$method = $_SERVER["REQUEST_METHOD"];

switch ($resource) {
    case "register":
        $json = file_get_contents("php://input");
        $array = json_decode($json, true);
        http_response_code(200);
        header("Content-Type: application/json");
        if (UserController::registerUser($array)) {
            $data = ["registered" => true];
        } else {
            $data = ["registered" => false];
        }
        echo json_encode($data);
        break;
    case "login":
        $json = file_get_contents("php://input");
        $array = json_decode($json, true);
        http_response_code(200);
        header("Content-Type: application/json");
        $user = UserController::loginUser($array);
        if ($user) {
            $data = ["authenticated" => true];
            $_SESSION["user"] = serialize($user);
        } else {
            $data = ["authenticated" => false];
        }
        echo json_encode($data);
        break;
    case "logout":
        session_unset();
        session_destroy();
        http_response_code(200);
        break;
    case "session":
        if (isset($_SESSION["user"])) {
            $user = unserialize($_SESSION["user"]);
            http_response_code(200);
            header("Content-Type: application/json");
            echo json_encode($user->getProps());
        } else {
            echo json_encode(["session" => false]);
        }
        break;
    case "users":
        switch ($method) {
            case "GET":
                http_response_code(200);
                header("Content-Type: application/json");
                $response = $id ? UserController::getUser(intval($id)) : UserController::getUser();
                echo json_encode($response);
                break;
            case "POST":
                break;
            case "PUT":
                break;
            case "DELETE":
                break;
        }
        break;
    case "blogs":
        switch ($method) {
            case "GET":
                http_response_code(200);
                header("Content-Type: application/json");
                $response = $id ? BlogController::getBlog(intval($id)) : BlogController::getBlog();
                echo json_encode($response);
                break;
            case "POST":
                break;
            case "PUT":
                break;
            case "DELETE":
                break;
        }
        break;
    case "posts":
        switch ($method) {
            case "GET":
                http_response_code(200);
                header("Content-Type: application/json");
                $response = $id ? PostController::getPost(intval($id)) : PostController::getPost();
                echo json_encode($response);
                break;
            case "POST":
                break;
            case "PUT":
                break;
            case "DELETE":
                break;
        }
        break;
    default:
        require_once "./app/views/app.php";
}
?>