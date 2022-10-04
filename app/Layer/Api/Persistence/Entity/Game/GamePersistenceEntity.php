<?php

namespace App\Layer\Api\Persistence\Entity\Game;

class GamePersistenceEntity
{
    private ?int $id;

    private ?int $winTeam = null;

    public function __construct(?int $id, ?int $winTeam = null)
    {
        $this->id = $id;
        $this->winTeam = $winTeam;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWinTeam(): ?int
    {
        return $this->winTeam;
    }
}
