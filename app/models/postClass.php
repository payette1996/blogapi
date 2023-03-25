<?php
class Post {
    private int $id;
    private string $title;
    private string $description;
    private int $blogId;
    private string $createdAt;

    public function __construct(string $title, string $description, int $blogId) {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setBlogId($blogId);
        $this->setCreatedAt();
    }

    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
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

    public function getBlogId() : int {
        return $this->blogId;
    }

    public function setBlogId(int $blogId) : void {
        $this->blogId = $blogId;
    }

    public function getCreatedAt() : string {
        return $this->createdAt;
    }

    public function setCreatedAt() : void {
        $this->createdAt = date('Y-m-d H:i:s');
    }
}
?>