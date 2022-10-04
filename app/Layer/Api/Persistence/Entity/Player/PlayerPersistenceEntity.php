<?php

namespace App\Layer\Api\Persistence\Entity\Player;

class PlayerPersistenceEntity
{
    private ?int $id;
    private string $name;
    private int $rating;
    private bool $isBanned;

    public function __construct(?int $id, string $name, int $rating, bool $isBanned)
    {
        $this->id = $id;
        $this->name = $name;
        $this->rating = $rating;
        $this->isBanned = $isBanned;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function isBanned(): bool
    {
        return $this->isBanned;
    }
}
