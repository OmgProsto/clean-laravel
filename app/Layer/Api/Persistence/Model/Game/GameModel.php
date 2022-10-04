<?php

namespace App\Layer\Api\Persistence\Model\Game;

use App\Layer\Api\Domain\Game\Entity\GameDomainEntity;
use App\Layer\Api\Domain\Game\Entity\Player\PlayerEntity;
use App\Layer\Api\Persistence\Entity\Game\GamePersistenceEntity;

class GameModel
{
    public function fromDomain(GameDomainEntity $gameDomainEntity): GamePersistenceEntity
    {
        return new GamePersistenceEntity(
            $gameDomainEntity->getId(),
            array_map(
                fn (PlayerEntity $playerEntity) => $playerEntity->getId(),
                $gameDomainEntity->getFirstTeam()->getPlayers()),
            array_map(
                fn (PlayerEntity $playerEntity) => $playerEntity->getId(),
                $gameDomainEntity->getSecondTeam()->getPlayers())
        );
    }

    public function toDomain(GameDomainEntity $gameDomainEntity): GamePersistenceEntity
    {
        return new GamePersistenceEntity(
            $gameDomainEntity->getId(),
            array_map(
                fn (PlayerEntity $playerEntity) => $playerEntity->getId(),
                $gameDomainEntity->getFirstTeam()->getPlayers()),
            array_map(
                fn (PlayerEntity $playerEntity) => $playerEntity->getId(),
                $gameDomainEntity->getSecondTeam()->getPlayers())
        );
    }
}
