<?php

namespace App\Presentation\Http\ViewModel\Player;

use App\Layer\Api\Domain\Player\GetPlayerByIdInterface;

class PlayerViewModel
{
    private const JUN = 'jun';
    private const MID = 'mid';
    private const STR = 'str';

    public function getRankByRating(int $rating): string
    {
        if ($rating < 26) {
            return self::JUN;
        } elseif ($rating < 51) {
            return self::MID;
        }

        return self::STR;
    }
}
