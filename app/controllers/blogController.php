<?php
require_once "./app/models/blogClass.php";
require_once "./app/models/databaseClass.php";

class BlogController {
    public static function getBlog (?int $id = null) : array {
        if (!$id) {
            $sql = "SELECT * from blogs";
            $stmt = Database::pdo()->query($sql);
            $rows = $stmt->fetchAll();
            return [$rows];
        } else {
            $sql = "SELECT id, title, description, user_id, created_at from blogs WHERE id = :id";
            $stmt = Database::pdo()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $row = $stmt->fetch();
            return [$row];
        }
    }
}
?>