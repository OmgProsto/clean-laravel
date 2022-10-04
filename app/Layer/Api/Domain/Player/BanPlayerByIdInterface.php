<?php

namespace App\Layer\Api\Domain\Player;

interface BanPlayerByIdInterface
{
    public function ban(int $id): void;
}
