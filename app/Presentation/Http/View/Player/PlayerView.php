<?php

namespace App\Presentation\Http\View\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;

class PlayerView
{
    private const ID = 'id';
    private const NAME = 'name';
    private const RANK = 'rank';

    public function toArrayFromDomain(PlayerDomainEntity $playerDomainEntity) : array
    {
        return [
            'id' => $playerDomainEntity->getId(),
            'name' => $playerDomainEntity->getName(),
            'rank' => $this->getRankByRating($playerDomainEntity->getRating())
        ];
    }

    private function getRankByRating(int $rating): string
    {
        return '123';
    }
}
