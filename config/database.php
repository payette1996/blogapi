<?php
    define("DRIVER", "mysql");
    define("HOST", "localhost");
    define("DATABASE", "blogapi");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("OPTIONS", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
?>