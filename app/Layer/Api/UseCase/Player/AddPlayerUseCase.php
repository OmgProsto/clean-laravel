<?php

namespace App\Layer\Api\UseCase\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerEntity;
use App\Layer\Api\Domain\Player\SaveNewPlayerInterface;

class AddPlayerUseCase
{
    public SaveNewPlayerInterface $saveNewPlayer;

    public function __construct(SaveNewPlayerInterface $saveNewPlayer)
    {
        $this->saveNewPlayer = $saveNewPlayer;
    }

    public function add(PlayerEntity $dto)
    {
        return $this->saveNewPlayer->save($dto);
    }
}
