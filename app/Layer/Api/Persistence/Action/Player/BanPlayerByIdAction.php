<?php

namespace App\Layer\Api\Persistence\Action\Player;

use App\Layer\Api\Domain\Player\BanPlayerByIdInterface;
use App\Layer\Api\Persistence\Repository\Player\PlayerRepository;

class BanPlayerByIdAction implements BanPlayerByIdInterface
{
    private PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function ban(int $id): void
    {
        $this->playerRepository->ban($id);
    }
}
