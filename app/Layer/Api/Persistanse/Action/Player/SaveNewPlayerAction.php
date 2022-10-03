<?php

namespace App\Layer\Api\Persistanse\Action\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerEntity;
use App\Layer\Api\Domain\Player\SaveNewPlayerInterface;
use App\Layer\Api\Persistanse\Model\Player\PlayerModel;
use App\Layer\Api\Persistanse\Repository\Player\PlayerRepository;

class SaveNewPlayerAction implements SaveNewPlayerInterface
{
    private PlayerRepository $playerRepository;
    private PlayerModel $playerModel;

    public function __construct(
        PlayerRepository $playerRepository,
        PlayerModel $playerModel
    ) {
        $this->playerRepository = $playerRepository;
        $this->playerModel = $playerModel;
    }

    public function save(PlayerEntity $playerEntity): int
    {
        return $this->playerRepository->save(
            $this->playerModel->fromDomainToDb($playerEntity)
        );
    }
}