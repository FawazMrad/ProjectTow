<?php

namespace App\Repositories\Interfaces;

use App\Models\AdministrativeRequest;

interface AdministrativeRequestRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?AdministrativeRequest;
    public function create(array $data): AdministrativeRequest;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
