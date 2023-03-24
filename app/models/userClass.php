<?php
class User {
    private int $id;
    private string $email;
    private string $firstName;
    private string $lastName;
    private string $password;
    private array $blogs;
    private array $posts;
    private string $createdAt;
    
    public function __construct(string $email, string $firstName, string $lastName, string $password) {
        $this->setEmail($email);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setPassword($password);
        $this->setCreatedAt();
    }
    
    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = (int) $id;
    }
    
    public function getEmail() : string {
        return $this->email;
    }
    
    public function setEmail(string $email) : void {
        $this->email = (string) $email;
    }
    
    public function getFirstName() : string {
        return $this->firstName;
    }
    
    public function setFirstName(string $firstName) : void {
        $this->firstName = (string) $firstName;
    }
    
    public function getLastName() : string {
        return $this->lastName;
    }
    
    public function setLastName(string $lastName) : void {
        $this->lastName = (string) $lastName;
    }
    
    public function getPassword() : string {
        return $this->password;
    }
    
    public function setPassword(string $password) : void {
        $this->password = (string) password_hash($password, PASSWORD_DEFAULT);
    }

    public function getBlogs() : array {
        return $this->blogs;
    }

    public function setBlogs(array $blogs) : void {
        $this->blogs = (array) $blogs;
    }

    public function getPosts() : array {
        return $this->posts;
    }

    public function setPosts(array $posts) : void {
        $this->posts = (array) $posts;
    }
    
    public function getCreatedAt() : string {
        return $this->createdAt;
    }
    
    public function setCreatedAt() : void {
        $this->createdAt = (string) date('Y-m-d H:i:s');
    }
}
?>