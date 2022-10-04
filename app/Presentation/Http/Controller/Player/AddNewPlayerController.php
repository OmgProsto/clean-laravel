<?php

namespace App\Presentation\Http\Controller\Player;

use App\Layer\Api\Domain\Player\Entity\PlayerRequestDto;
use App\Layer\Api\Domain\Player\Entity\PlayerDomainEntity;
use App\Layer\Api\UseCase\Player\AddPlayerUseCase;
use App\Presentation\Http\Controller\Controller;
use App\Presentation\Http\Request\Player\AddNewPlayerRequest;
use App\Presentation\Http\View\Player\PlayerView;

class AddNewPlayerController extends Controller
{
    private AddPlayerUseCase $addPlayerUseCase;
    private PlayerView $playerView;

    public function __construct(AddPlayerUseCase $addPlayerUseCase, PlayerView $playerView)
    {
        $this->addPlayerUseCase = $addPlayerUseCase;
        $this->playerView = $playerView;
    }

    public function save(AddNewPlayerRequest $request)
    {
        $request->validated();

        $dto = new PlayerRequestDto(
            $request->name
        );

        return $this->sendSuccessResponse(
            $this->playerView->toArrayFromDomain(
                $this->addPlayerUseCase->add($dto)
            )
        );
    }
}
