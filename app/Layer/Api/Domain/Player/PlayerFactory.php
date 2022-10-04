<?php

namespace App\Layer\Api\Domain\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerRequestDto;
use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;

class PlayerFactory
{
    private const START_RATING = 25;

    public function makeDomainFromDto(PlayerRequestDto $playerDto): PlayerDomainEntity
    {
        return new PlayerDomainEntity(
            null,
            $playerDto->getName(),
            self::START_RATING
        );
    }
}
