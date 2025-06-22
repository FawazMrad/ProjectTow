<?php

namespace App\Repositories\Interfaces;

use App\Models\TrainingSession;

interface TrainingSessionRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?TrainingSession;
    public function create(array $data): TrainingSession;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
