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

    /**
     * @return PlayerPersistenceEntity[]
     */
    public function getOrderByRating(): array
    {
        $playerLaravelModels = Player::orderBy('rating');

        return array_map(
            fn (Player $playerLaravelModel): PlayerPersistenceEntity =>
                $this->makePersistenceEntity($playerLaravelModel),
            $playerLaravelModels
        );
    }

    public function ban(int $playerId): void
    {
        $playerLaravelModel = Player::find($playerId);

        $playerLaravelModel->isBanned = true;

        $playerLaravelModel->save();
    }

    public function save(PlayerPersistenceEntity $playerEntity): int
    {
        $playerLaravelModel = new Player([
            'name' => $playerEntity->getName(),
            'rating' => $playerEntity->getRating(),
            'is_banned' => $playerEntity->isBanned()
        ]);

        $playerLaravelModel->save();

        return $playerLaravelModel->id;
    }

    public function makePersistenceEntity(Player $playerLaravelModel): PlayerPersistenceEntity
    {
        return new PlayerPersistenceEntity(
            $playerLaravelModel->id,
            $playerLaravelModel->name,
            $playerLaravelModel->rating,
            $playerLaravelModel->is_banned
        );
    }
}
