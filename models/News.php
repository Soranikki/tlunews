<?php

class News
{
    // Properties
    private int $id;
    private string $title;
    private string $content;
    private string $image;
    private string $created_at;
    private int $category_id;

    // Constructor
    public function __construct(
        int $id = 0,
        string $title = "",
        string $content = "",
        string $image = "",
        string $created_at = "",
        int $category_id = 0
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->created_at = $created_at ?: date("Y-m-d H:i:s");
        $this->category_id = $category_id;
    }

    // Getters and Setters
    public function getId(): int 
    { 
        return $this->id; 
    }

    public function setId(int $id): void 
    { 
        $this->id = $id; 
    }

    public function getTitle(): string 
    { 
        return $this->title;
    }

    public function setTitle(string $title): void 
    { 
        $this->title = $title; 
    }

    public function getContent(): string 
    { 
        return $this->content; 
    }

    public function setContent(string $content): void 
    { 
        $this->content = $content; 
    }

    public function getImage(): string 
    { 
        return $this->image; 
    }

    public function setImage(string $image): void 
    { 
        $this->image = $image; 
    }

    public function getCreatedAt(): string 
    { 
        return $this->created_at; 
    }

    public function setCreatedAt(string $created_at): void
    { 
        $this->created_at = $created_at; 
    }

    public function getCategoryId(): int
    {
        return $this->category_id; 
    }

    public function setCategoryId(int $category_id): void
    { 
        $this->category_id = $category_id;
    }
}

?>
