<?php

namespace App\Layer\Api\Domain\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;

interface GetPlayerByIdInterface
{
    public function get(int $id): PlayerDomainEntity;
}
