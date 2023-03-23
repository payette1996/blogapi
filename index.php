<?php
declare(strict_types=1);

$config = require_once "./config/database.php";

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$req = $_SERVER["REQUEST_URI"];

if ($_SERVER['REQUEST_URI'] === '/blogapi/register') {
    http_response_code(200);
    header('Content-Type: text/plain');
    echo $_POST["email"];
} else {
    require_once "./app/views/app.php";
}
?>
