<?php

namespace App\Layer\Api\UseCase\Player;

use App\Layer\Api\Domain\Player\BanPlayerByIdInterface;
use App\Layer\Api\Persistence\Action\Player\BanPlayerByIdAction;

class BanPlayerUseCase
{
    private BanPlayerByIdInterface $banPlayerById;

    public function __construct(BanPlayerByIdInterface $banPlayerById)
    {
        $this->banPlayerById = $banPlayerById;
    }


    public function ban(int $playerId): void
    {
        $this->banPlayerById->ban($playerId);
    }
}
