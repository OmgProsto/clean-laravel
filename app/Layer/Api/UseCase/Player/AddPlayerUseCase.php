<?php

namespace App\Layer\Api\UseCase\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;
use App\Layer\Api\Domain\Player\Entity\PlayerRequestDto;
use App\Layer\Api\Domain\Player\GetPlayerByIdInterface;
use App\Layer\Api\Domain\Player\PlayerFactory;
use App\Layer\Api\Domain\Player\SaveNewPlayerInterface;

class AddPlayerUseCase
{
    public PlayerFactory $playerFactory;
    public SaveNewPlayerInterface $saveNewPlayer;
    public GetPlayerByIdInterface $getPlayerById; // ?????

    public function __construct(
        PlayerFactory $playerFactory,
        SaveNewPlayerInterface $saveNewPlayer,
        GetPlayerByIdInterface $getPlayerById
    ) {
        $this->playerFactory = $playerFactory;
        $this->saveNewPlayer = $saveNewPlayer;
        $this->getPlayerById = $getPlayerById;
    }

    public function add(PlayerRequestDto $dto): PlayerDomainEntity
    {
        $player = $this->playerFactory->makeDomainFromDto($dto);

        $playerId = $this->saveNewPlayer->save($player);

        return $this->getPlayerById->get($playerId);
    }
}
