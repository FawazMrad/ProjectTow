<?php

namespace App\Repositories\Interfaces;

use App\Models\Family;

interface FamilyRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?Family;
    public function findByHead(int $headId): ?Family;
    public function create(array $data): Family;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
