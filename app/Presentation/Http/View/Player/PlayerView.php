<?php

namespace App\Presentation\Http\View\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;
use App\Presentation\Http\ViewModel\Player\PlayerViewModel;

class PlayerView
{
    private const ID = 'id';
    private const NAME = 'name';
    private const RANK = 'rank';

    private PlayerViewModel $playerViewModel;

    public function __construct(PlayerViewModel $playerViewModel)
    {
        $this->playerViewModel = $playerViewModel;
    }

    public function toArrayFromDomain(PlayerDomainEntity $playerDomainEntity) : array
    {
        return [
            'id' => $playerDomainEntity->getId(),
            'name' => $playerDomainEntity->getName(),
            'rank' => $this->playerViewModel->getRankByRating($playerDomainEntity->getRating())
        ];
    }
}
