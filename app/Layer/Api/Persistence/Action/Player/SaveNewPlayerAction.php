<?php

namespace App\Layer\Api\Persistanse\Action\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;
use App\Layer\Api\Domain\Player\SaveNewPlayerInterface;
use App\Layer\Api\Persistanse\Model\Player\PlayerModel;
use App\Layer\Api\Persistanse\Repository\Player\PlayerRepository\PlayerRepository;

class SaveNewPlayerAction implements SaveNewPlayerInterface
{
    private PlayerRepository $playerRepository;
    private PlayerModel $playerModel;

    public function __construct(
        PlayerRepository\PlayerRepository $playerRepository,
        PlayerModel                       $playerModel
    ) {
        $this->playerRepository = $playerRepository;
        $this->playerModel = $playerModel;
    }

    public function save(PlayerDomainEntity $playerEntity): int
    {
        return $this->playerRepository->save(
            $this->playerModel->fromDomainToDb($playerEntity)
        );
    }
}
