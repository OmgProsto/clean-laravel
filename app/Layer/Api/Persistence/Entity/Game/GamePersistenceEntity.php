<?php

namespace App\Layer\Api\Persistence\Entity\Game;

class GamePersistenceEntity
{
    private ?int $id;
    /**
     * @var int[]
     */
    private array $firstTeamPlayerIds; // ???????????????????
    /**
     * @var int[]
     */
    private array $secondTeamPlayerIds;
    private ?int $winTeam = null;

    public function __construct(?int $id, array $firstTeamPlayerIds, array $secondTeamPlayerIds, ?int $winTeam = null)
    {
        $this->id = $id;
        $this->firstTeamPlayerIds = $firstTeamPlayerIds;
        $this->secondTeamPlayerIds = $secondTeamPlayerIds;
        $this->winTeam = $winTeam;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int[]
     */
    public function getFirstTeamPlayerIds(): array
    {
        return $this->firstTeamPlayerIds;
    }

    /**
     * @return int[]
     */
    public function getSecondTeamPlayerIds(): array
    {
        return $this->secondTeamPlayerIds;
    }

    public function getWinTeam(): ?int
    {
        return $this->winTeam;
    }
}
