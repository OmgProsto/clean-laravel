<?php

namespace App\Layer\Api\Persistanse\Repository\Player\PlayerRepository;

use App\Layer\Api\Persistanse\Entity\Player\PlayerEntity;

class PlayerRepository
{
    public function getById(int $id): PlayerEntity
    {
        return $this->makeEntity(Player::find($id));
    }

    public function makeEntity(Player $playerModel): PlayerEntity
    {
        return new PlayerEntity();
    }
}
