<?php

namespace App\Layer\Api\Domain\Game\Entity;

use App\Layer\Api\Domain\Game\Entity\Player\PlayersCollection;

class GameDomainEntity
{
    private ?int $id;
    private PlayersCollection $firstTeam;
    private PlayersCollection $secondTeam;
    private ?int $winTeam;

    public function __construct(?int $id, PlayersCollection $firstTeam, PlayersCollection $secondTeam, ?int $winTeam = null)
    {
        $this->firstTeam = $firstTeam;
        $this->secondTeam = $secondTeam;
        $this->winTeam = $winTeam;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstTeam(): PlayersCollection
    {
        return $this->firstTeam;
    }

    public function getSecondTeam(): PlayersCollection
    {
        return $this->secondTeam;
    }

    /**
     * @return int|null
     */
    public function getWinTeam(): ?int
    {
        return $this->winTeam;
    }
}
