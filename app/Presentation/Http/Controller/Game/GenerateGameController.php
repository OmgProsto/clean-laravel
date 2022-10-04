<?php

namespace App\Presentation\Http\Controller\Game;

use App\Layer\Api\UseCase\Game\GenerateNewGameUseCase;
use App\Presentation\Http\Controller\Controller;

class GenerateGameController extends Controller
{
    private GenerateNewGameUseCase $generateNewGameUseCase;

    public function __construct(GenerateNewGameUseCase $generateNewGameUseCase)
    {
        $this->generateNewGameUseCase = $generateNewGameUseCase;
    }

    public function generate()
    {


        return $this->sendSuccessResponse(

        );
    }
}
