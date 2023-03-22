<?php
class Post {
    private int $id;
    private string $title;
    private string $description;
    private int $blogId;
    private int $userId;
    private string $createdAt;
    
    public function __construct(string $title, string $description, int $blogId, int $userId) {
        $this->title = (string) $title;
        $this->description = (string) $description;
        $this->blogId = (int) $blogId;
        $this->userId = (int) $userId;
        $this->createdAt = (string) date('Y-m-d H:i:s');
    }
    
    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = (int) $id;
    }
    
    public function getTitle() : string {
        return $this->title;
    }
    
    public function setTitle(string $title) : void {
        $this->title = (string) $title;
    }
    
    public function getDescription() : string {
        return $this->description;
    }
    
    public function setDescription(string $description) : void {
        $this->description = (string) $description;
    }
    
    public function getBlogId() : int {
        return $this->blogId;
    }
    
    public function setBlogId($blogId) : void {
        $this->blogId = (int) $blogId;
    }

    public function getUserId() : int {
        return $this->userId;
    }
    
    public function setUserId(int $userId) : void {
        $this->userId = (int) $userId;
    }
    
    public function getCreatedAt() : string {
        return $this->createdAt;
    }
    
    public function setCreatedAt(string $createdAt) : void {
        $this->createdAt = (string) $createdAt;
    }
}
?>