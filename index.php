<?php
declare(strict_types=1);

$config = require_once "./config/database.php";

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$req = $_SERVER["REQUEST_URI"];

switch ($req) {
    case "/blogapi/register":
        http_response_code(200);
        header('Content-Type: text/plain');
        if (isset($_POST['email'])) {
            echo "Register request for : {$_POST['email']}";
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
