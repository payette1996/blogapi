<?php
require_once "./app/models/userClass.php";
require_once "./app/models/databaseClass.php";

class UserController {
    public function registerUser(string $email, string $firstName, string $lastName, string $password) : bool {
        $user = new User($email, $firstName, $lastName, $password);

        $sql = "
            INSERT INTO users (email, firstname, lastname, password, created_at)
            VALUES (:email, :firstname, :lastname, :password, :created_at)
        ";

        $params = [
            ":email" => $user->getEmail(),
            ":firstname" => $user->getFirstName(),
            ":lastname" => $user->getLastName(),
            ":password" => $user->getPassword(),
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
}
?>