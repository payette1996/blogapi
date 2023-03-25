<?php
class Blog {
    private int $id;
    private string $title;
    private string $description;
    private array $posts;
    private int $userId;
    private string $createdAt;
    
    public function __construct(string $title, string $description, int $userId) {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setUserId($userId);
        $this->setCreatedAt();
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
        $this->description = $description;
    }

    public function getPosts() : array {
        return $this->posts;
    }

    public function setPosts(array $posts) : void {
        $this->posts = $posts;
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
    
    public function setCreatedAt() : void {
        $this->createdAt = date('Y-m-d H:i:s');
    }
}
?>