<?php
require_once "./config/database.php";

class Database {
    private static PDO $instance;
    private PDO $pdo;

    private function __construct() {
        try {
            $this->pdo = new PDO(
                "{DRIVER}:dbname={DATABASE};host={HOST}",
                USERNAME,
                PASSWORD,
                OPTIONS
            );
        } catch (PDOException $exception) {

            exit($exception);
        }
    }

    public static function getInstance() : PDO {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
}
?>