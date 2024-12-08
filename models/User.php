<?php

class User
{
    // Properties
    private int $id;
    private string $username;
    private string $password;
    private int $role;

    // Constructor
    public function __construct(
        int $id = 0,
        string $username = "",
        string $password = "",
        int $role = 0
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    // Getters and Setters
    public function getId(): int { 
        return $this->id; 
    }
    public function setId(int $id): void { 
        $this->id = $id; 
    }

    public function getUsername(): string { 
        return $this->username; 
    }
    public function setUsername(string $username): void { 
        $this->username = $username; 
    }

    public function getPassword(): string { 
        return $this->password; 
    }
    public function setPassword(string $password): void { 
        $this->password = $password; 
    }

    public function getRole(): int { 
        return $this->role; 
    }
    public function setRole(int $role): void { 
        $this->role = $role; 
    }
}

?>
