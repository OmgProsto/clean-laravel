<?php

namespace App\Layer\Api\Persistence\Action\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;
use App\Layer\Api\Domain\Player\SaveNewPlayerInterface;
use App\Layer\Api\Persistence\Model\Player\PlayerModel;
use App\Layer\Api\Persistence\Repository\Player\PlayerRepository;

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

    public function save(PlayerDomainEntity $playerEntity): int
    {
        return $this->playerRepository->save(
            $this->playerModel->fromDomain($playerEntity)
        );
    }
}
