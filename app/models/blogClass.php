<?php
class Blog {
    private int $id;
    private string $title;
    private string $description;
    private array $posts;
    private int $userId;
    private string $createdAt;
    
    public function __construct(string $title, string $description, int $userId) {
        $this->title = (string) $title;
        $this->description = (string) $description;
        $this->userId = (int) $userId;
        $this->createdAt = (string) date('Y-m-d H:i:s');
    }
    
    public function getId() : int {
        return $this->id;
    }
    
    public function getTitle() : string {
        return $this->title;
    }
    
    public function setTitle(string $title) : void {
        $this->title = $title;
    }
    
    public function getDescription() : string {
        return $this->description;
    }
    
    public function setDescription(string $description) : void {
        $this->description = (string) $description;
    }

    public function getPosts() : array {
        return $this->posts;
    }

    public function setPosts(array $posts) : void {
        $this->posts = (array) $posts;
    }
    
    public function getUserId() : int {
        return $this->userId;
    }

    public function setUserId(int $userId) : void {
        $this->userId = $userId;
    }
    
    public function getCreatedAt() : string {
        return $this->createdAt;
    }
    
    public function setCreatedAt(string $createdAt) : void {
        $this->createdAt = (string) $createdAt;
    }
}
?>