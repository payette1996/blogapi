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
        echo "Register request for : {$_POST['email']}";
        break;
    case "/blogapi/login":
        http_response_code(200);
        header('Content-Type: text/plain');
        echo "Login request for : {$_POST['email']}";
        break;
    default:
        require_once "./app/views/app.php";
}
?>
