<?php
declare(strict_types=1);

require_once "./app/models/databaseClass.php";
require_once "./app/models/userClass.php";
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
            $_SESSION["user"] = serialize($user);
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
    case "/blogapi/session":
        if (isset($_SESSION["user"])) {
            $user = unserialize($_SESSION["user"]);
            http_response_code(200);
            header("Content-Type: application/json");
            echo json_encode($user->getProps());
        } else {
            echo json_encode(["session" => false]);
        }
        break;
    case "/blogapi/users":
        http_response_code(200);
        header("Content-Type: application/json");
        $stmt = Database::pdo()->query("SELECT * FROM users");
        $rows = $stmt->fetchAll();
        echo json_encode($rows);
        break;
    case "/blogapi/blogs":
        http_response_code(200);
        header("Content-Type: application/json");
        $stmt = Database::pdo()->query("SELECT * FROM blogs");
        $rows = $stmt->fetchAll();
        echo json_encode($rows);
        break;
    case "/blogapi/posts":
        http_response_code(200);
        header("Content-Type: application/json");
        $stmt = Database::pdo()->query("SELECT * FROM posts");
        $rows = $stmt->fetchAll();
        echo json_encode($rows);
        break;
    default:
        require_once "./app/views/app.php";
}
?>