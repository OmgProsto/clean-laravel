<?php

namespace App\Layer\Api\UseCase\Game;

use App\Layer\Api\Domain\Game\Entity\GameDomainEntity;
use App\Layer\Api\Domain\Game\GameBuilder;
use App\Layer\Api\Domain\Game\GetPlayersOrderByRatingFromGameInterface;
use App\Layer\Api\Domain\Game\SaveGameInterface;

class GenerateNewGameUseCase
{
    private GetPlayersOrderByRatingFromGameInterface $getPlayersFromGame;
    private GameBuilder $gameBuilder;
    private SaveGameInterface $saveGame;

    public function __construct(
        GetPlayersOrderByRatingFromGameInterface $getPlayersFromGame,
        GameBuilder $gameBuilder,
        SaveGameInterface $saveGame
    ) {
        $this->getPlayersFromGame = $getPlayersFromGame;
        $this->gameBuilder = $gameBuilder;
        $this->saveGame = $saveGame;
    }

    public function generate(): int
    {
        $players = $this->getPlayersFromGame->get();

        $game = $this->gameBuilder->make($players);

        return $this->saveGame->save($game);
    }
}
