<?php

class Category
{
    // Properties
    private int $id;
    private string $name;

    // Constructor
    public function __construct(int $id = 1, string $name = "")
    {
        $this->id = $id;
        $this->name = $name;
    }

    // Getter for ID
    public function getId(): int
    {
        return $this->id;
    }

    // Setter for ID
    public function setId(int $id): void
    {
        if ($id < 1) {
            throw new InvalidArgumentException("ID must be 1 or greater.");
        }
        $this->id = $id;
    }

    // Getter for Name
    public function getName(): string
    {
        return $this->name;
    }

    // Setter for Name
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

?>
