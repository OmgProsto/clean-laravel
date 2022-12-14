<?php

namespace App\Layer\Api\Domain\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;

interface SaveNewPlayerInterface
{
    public function save(PlayerDomainEntity $playerEntity): int;
}
