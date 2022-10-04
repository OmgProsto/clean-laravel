<?php

namespace App\Layer\Api\Domain\Game;

use App\Layer\Api\Domain\Game\Entity\GameDomainEntity;

interface SaveGameInterface
{
    public function save(GameDomainEntity $gameDomainEntity): int;
}
