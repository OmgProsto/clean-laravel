<?php

namespace App\Layer\Api\Persistence\Action\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;
use App\Layer\Api\Domain\Player\GetPlayerByIdInterface;
use App\Layer\Api\Persistence\Model\Player\PlayerModel;
use App\Layer\Api\Persistence\Repository\Player\PlayerRepository;

class GetPlayerByIdAction implements GetPlayerByIdInterface
{
    private PlayerModel $playerModel;
    private PlayerRepository $playerRepository;

    public function __construct(
        PlayerModel $playerModel,
        PlayerRepository $playerRepository
    ) {
        $this->playerModel = $playerModel;
        $this->playerRepository = $playerRepository;
    }

    public function get(int $id): PlayerDomainEntity
    {
        return $this->playerModel->toDomain(
            $this->playerRepository->getById($id)
        );
    }
}
