<?php
return [
    "driver" => "mysql",
    "host" => "localhost",
    "database" => "blogapi",
    "username" => "root",
    "password" => "",
    "charset" => "utf8mb4",
    "collation" => "utf8mb4_unicode_ci",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ],
];
?>