<?php
require_once "./app/models/userClass.php";
require_once "./app/models/databaseClass.php";

class UserController {
    public static function registerUser(array $array) : bool {
        $user = new User($array);

        $sql = "
            INSERT INTO users (email, password, firstname, lastname, created_at)
            VALUES (:email, :password, :firstname, :lastname, :created_at)
        ";

        $params = [
            ":email" => $user->getEmail(),
            ":password" => $user->getPassword(),
            ":firstname" => $user->getFirstName(),
            ":lastname" => $user->getLastName(),
            ":created_at" => $user->getCreatedAt()
        ];
        
        $stmt = Database::pdo()->prepare($sql);

        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function loginUser (array $array) : ?User {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = Database::pdo()->prepare($sql);
        $stmt->bindValue(":email", $array["email"]);
        $stmt->execute();
        $row = $stmt->fetch();

        if (password_verify($array["password"], $row["password"])) {
            return new User($row);
        }
        return null;
    }

    public static function getUser (?int $id = null) : array {
        if (!$id) {
            $sql = "SELECT * from users";
            $stmt = Database::pdo()->query($sql);
            $rows = $stmt->fetchAll();
            return [$rows];
        } else {
            $sql = "SELECT id, firstname, lastname, created_at from users WHERE id = :id";
            $stmt = Database::pdo()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $row = $stmt->fetch();
            return [$row];
        }
    }
}
?>