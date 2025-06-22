<?php

namespace App\Repositories\Interfaces;

use App\Models\Badge;

interface BadgeRepositoryInterface
{
    public function all(): iterable;

    public function findById(int $id): ?Badge;

    public function create(array $data): Badge;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
