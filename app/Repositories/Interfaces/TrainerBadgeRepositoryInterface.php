<?php

namespace App\Repositories\Interfaces;

use App\Models\TrainerBadge;

interface TrainerBadgeRepositoryInterface
{
    public function all(): iterable;

    public function findById(int $id): ?TrainerBadge;

    public function create(array $data): TrainerBadge;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
