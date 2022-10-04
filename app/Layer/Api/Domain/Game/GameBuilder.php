<?php

namespace App\Layer\Api\Domain\Game;

use App\Layer\Api\Domain\Game\Entity\GameDomainEntity;
use App\Layer\Api\Domain\Game\Entity\Player\PlayerEntity;
use App\Layer\Api\Domain\Game\Entity\Player\PlayersCollection;

class GameBuilder
{
    /**
     * @param PlayerEntity[] $players
     * @return GameDomainEntity
     */
    public function make(array $players): GameDomainEntity
    {
        $firstTeamPlayers = [];
        $secondTeamPlayers = [];

        $isFirstTeamPlayer = true;

        for ($i = 0, $len = count($players); $i < floor($len / 2); $i++) {

            if ($isFirstTeamPlayer) {
                $firstTeamPlayers[] = $players[$i];
                $firstTeamPlayers[] = $players[$len - $i];

                $isFirstTeamPlayer = false;
            } else {
                $secondTeamPlayers[] = $players[$i];
                $secondTeamPlayers[] = $players[$len - $i];

                $isFirstTeamPlayer = true;
            }

        }

        return new GameDomainEntity(
            null,
            new PlayersCollection($firstTeamPlayers),
            new PlayersCollection($secondTeamPlayers)
        );
    }
}
