<?php

namespace App\Presentation\Http\Controller\Player;

use App\Layer\Api\UseCase\Player\BanPlayerUseCase;
use App\Presentation\Http\Controller\Controller;
use App\Presentation\Http\Request\Player\BanPlayerByIdRequest;

class BanPlayerByIdController extends Controller
{
    private BanPlayerUseCase $banPlayerUseCase;

    public function __construct(BanPlayerUseCase $banPlayerUseCase)
    {
        $this->banPlayerUseCase = $banPlayerUseCase;
    }

    public function ban(BanPlayerByIdRequest $request)
    {
        $request->validate();

        $this->banPlayerUseCase->ban($request->id);

        return $this->sendSuccessResponse([
            'status' => 'ok'
        ]);
    }
}
