<?php
require_once "./app/models/postClass.php";
require_once "./app/models/databaseClass.php";

class PostController {
    public static function getPost (?int $id = null) : array {
        if (!$id) {
            $sql = "SELECT * from posts";
            $stmt = Database::pdo()->query($sql);
            $rows = $stmt->fetchAll();
            return [$rows];
        } else {
            $sql = "SELECT id, title, description, blog_id, created_at from posts WHERE id = :id";
            $stmt = Database::pdo()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $row = $stmt->fetch();
            return [$row];
        }
    }
}
?>