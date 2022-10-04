<?php

namespace App\Layer\Api\Domain\Game;

use App\Layer\Api\Domain\Game\Entity\Player\PlayerEntity;

interface GetPlayersOrderByRatingFromGameInterface
{
    /**
     * @return PlayerEntity[]
     */
    public function get(): array;
}
