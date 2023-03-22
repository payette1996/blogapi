<?php
class User {
    private $id;
    private $email;
    private $firstName;
    private $lastName;
    private $password;
    private $createdAt;
    
    public function __construct($email, $firstName, $lastName, $password) {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->createdAt = date('Y-m-d H:i:s');
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getFirstName() {
        return $this->firstName;
    }
    
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }
    
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function getCreatedAt() {
        return $this->createdAt;
    }
    
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }
}
?>