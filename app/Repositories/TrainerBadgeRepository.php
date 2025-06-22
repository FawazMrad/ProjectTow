<?php

namespace App\Repositories;

use App\Models\TrainerBadge;
use App\Repositories\Interfaces\TrainerBadgeRepositoryInterface;

class TrainerBadgeRepository implements TrainerBadgeRepositoryInterface
{
    public function all(): iterable
    {
        return TrainerBadge::all();
    }

    public function findById(int $id): ?TrainerBadge
    {
        return TrainerBadge::find($id);
    }

    public function create(array $data): TrainerBadge
    {
        return TrainerBadge::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $trainerBadge = TrainerBadge::find($id);
        return $trainerBadge ? $trainerBadge->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $trainerBadge = TrainerBadge::find($id);
        return $trainerBadge ? $trainerBadge->delete() : false;
    }
}
