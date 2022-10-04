<?php

namespace App\Layer\Api\Persistence\Model\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;
use App\Layer\Api\Persistence\Entity\Player\PlayerPersistenceEntity;


class PlayerModel
{
    public function fromDomain(PlayerDomainEntity $playerEntity): PlayerPersistenceEntity
    {
        return new PlayerPersistenceEntity(
            $playerEntity->getId(),
            $playerEntity->getName(),
            $playerEntity->getRating()
        );
    }

    public function toDomain(PlayerPersistenceEntity $playerEntity): PlayerDomainEntity
    {
        return new PlayerDomainEntity(
            $playerEntity->getId(),
            $playerEntity->getName(),
            $playerEntity->getRating()
        );
    }
}
