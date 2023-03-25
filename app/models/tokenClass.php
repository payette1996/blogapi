<?php
class Token {
    private int $id;
    private string $lexeme;
    private int $userId;
    private string $createdAt;

    public function __construct($lexeme, $userId) {
        $this->setLexeme($lexeme);
        $this->setUserId($userId);
        $this->setCreatedAt();
    }

    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function getLexeme() : string {
        return $this->lexeme;
    }

    public function setLexeme(string $lexeme) : void {
        $this->lexeme = $lexeme;
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