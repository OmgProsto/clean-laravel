<?php

namespace App\Layer\Api\Domain\Game\Entity\Player;

class PlayerEntity
{
    private int $id;
    private int $rating;

    public function __construct(
        int $id,
        int $rating
    ) {
        $this->id = $id;
        $this->rating = $rating;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRating(): int
    {
        return $this->rating;
    }
}
