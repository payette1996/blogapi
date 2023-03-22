<?php
class Post {
    private $id;
    private $title;
    private $description;
    private $blogId;
    private $createdAt;
    
    public function __construct($title, $description, $blogId) {
        $this->title = $title;
        $this->description = $description;
        $this->blogId = $blogId;
        $this->createdAt = date('Y-m-d H:i:s');
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function getBlogId() {
        return $this->blogId;
    }
    
    public function setBlogId($blogId) {
        $this->blogId = $blogId;
    }
    
    public function getCreatedAt() {
        return $this->createdAt;
    }
    
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }
}
?>