<?php

namespace App\Layer\Api\Domain\Game\Entity\Player;

class PlayersCollection
{
    private array $players;

    public function __construct(array $players)
    {
        $this->players = $players;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }
}
