<?php

namespace App\Layer\Api\Persistence\Action\Game;

use App\Layer\Api\Domain\Game\Entity\GameDomainEntity;
use App\Layer\Api\Domain\Game\SaveGameInterface;
use App\Layer\Api\Persistence\Repository\Game\GameRepository;

class SaveGameAction implements SaveGameInterface
{
    private GameRepository $gameRepository;

    public function __construct(GameRepository $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }

    public function save(GameDomainEntity $gameDomainEntity): int
    {
        // TODO: Implement save() method.
    }
}
