<?php
    $driver = "mysql";
    $host = "localhost";
    $database = "blogapi";
    $username = "root";
    $password = "";
    $charset = "utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $dsn = "$driver:host=$host;dbname=$database;charset=$charset";
?>