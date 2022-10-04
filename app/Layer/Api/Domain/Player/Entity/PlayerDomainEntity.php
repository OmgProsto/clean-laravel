<?php

namespace App\Layer\Api\Domain\Player\Entity;

class PlayerDomainEntity
{
    private ?int $id;
    private string $name;
    private int $rating;

    public function __construct(?int $id, string $name, int $rating)
    {
        $this->id = $id;
        $this->name = $name;
        $this->rating = $rating;
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
}
