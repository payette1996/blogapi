<?php
class Blog {
    private $id;
    private $title;
    private $description;
    private $userId;
    private $createdAt;
    
    public function __construct($title, $description, $userId) {
        $this->title = $title;
        $this->description = $description;
        $this->userId = $userId;
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
    
    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }
    
    public function getCreatedAt() {
        return $this->createdAt;
    }
    
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }
}
?>