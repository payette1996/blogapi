<?php
require_once "./config/database.php";

class Database {
    private PDO $pdo;

    private function __construct() {
        try {
            $this->pdo = new PDO($dsn, $username, $password);
        } catch (PDOException $exception) {
            exit($exception);
        }
    }
}
?>