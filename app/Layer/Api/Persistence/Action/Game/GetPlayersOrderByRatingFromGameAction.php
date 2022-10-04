<?php

namespace App\Layer\Api\Persistence\Action\Game;

use App\Layer\Api\Domain\Game\Entity\Player\PlayerEntity;
use App\Layer\Api\Domain\Game\GetPlayersOrderByRatingFromGameInterface;
use App\Layer\Api\Persistence\Entity\Player\PlayerPersistenceEntity; // ???????????????
use App\Layer\Api\Persistence\Repository\Player\PlayerRepository;

class GetPlayersOrderByRatingFromGameAction implements GetPlayersOrderByRatingFromGameInterface
{
    private PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    /**
     * @return PlayerEntity[]
     */
    public function get(): array
    {
        return array_map(
            fn (PlayerPersistenceEntity $playerPersistenceEntity): PlayerEntity => new PlayerEntity(
                $playerPersistenceEntity->getId(),
                $playerPersistenceEntity->getRating()
            ),
            $this->playerRepository->getOrderByRating()
        );
    }
}
