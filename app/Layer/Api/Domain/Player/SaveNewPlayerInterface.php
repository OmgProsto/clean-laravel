<?php

namespace App\Layer\Api\Domain\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerEntity;

interface SaveNewPlayerInterface
{
    public function save(PlayerEntity $playerEntity): int;
}
