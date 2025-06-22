<?php

namespace App\Repositories;

use App\Models\Badge;
use App\Repositories\Interfaces\BadgeRepositoryInterface;

class BadgeRepository implements BadgeRepositoryInterface
{
    public function all(): iterable
    {
        return Badge::all();
    }

    public function findById(int $id): ?Badge
    {
        return Badge::find($id);
    }

    public function create(array $data): Badge
    {
        return Badge::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $badge = Badge::find($id);
        return $badge ? $badge->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $badge = Badge::find($id);
        return $badge ? $badge->delete() : false;
    }
}
