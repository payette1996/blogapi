<?php
class User {
    private int $id;
    private string $email;
    private string $password;
    private string $firstName;
    private string $lastName;
    private array $blogs;
    private array $posts;
    private string $createdAt;
    
    public function __construct(array $array) {
        foreach ($array as $key => $value) {
            $setter = "set" . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
        $this->setCreatedAt();
    }
    
    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }
    
    public function getEmail() : string {
        return $this->email;
    }
    
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    
    public function getPassword() : string {
        return $this->password;
    }
    
    public function setPassword(string $password) : void {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getFirstName() : string {
        return $this->firstName;
    }
    
    public function setFirstName(string $firstName) : void {
        $this->firstName = $firstName;
    }
    
    public function getLastName() : string {
        return $this->lastName;
    }
    
    public function setLastName(string $lastName) : void {
        $this->lastName = $lastName;
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
        $this->createdAt = date('Y-m-d H:i:s');
    }
}
?>