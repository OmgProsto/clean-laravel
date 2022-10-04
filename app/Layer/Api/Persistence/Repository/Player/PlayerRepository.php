<?php

namespace App\Layer\Api\Persistence\Repository\Player;

use App\Layer\Api\Persistence\Entity\Player\PlayerPersistenceEntity;

class PlayerRepository
{
    public function getById(int $id): PlayerPersistenceEntity
    {
        $playerLaravelModel = Player::find($id);

        return $this->makePersistenceEntity($playerLaravelModel);
    }

    public function save(PlayerPersistenceEntity $playerEntity): int
    {
        $playerLaravelModel = new Player([
            'name' => $playerEntity->getName(),
            'rating' => $playerEntity->getRating()
        ]);

        $playerLaravelModel->save();

        return $playerLaravelModel->id;
    }

    public function makePersistenceEntity(Player $playerLaravelModel): PlayerPersistenceEntity
    {
        return new PlayerPersistenceEntity(
            $playerLaravelModel->id,
            $playerLaravelModel->name,
            $playerLaravelModel->rating
        );
    }
}
