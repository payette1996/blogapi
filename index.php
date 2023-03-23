<?php
declare(strict_types=1);

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$req = $_SERVER["REQUEST_URI"];

require_once "./app/views/app.php";
?>
