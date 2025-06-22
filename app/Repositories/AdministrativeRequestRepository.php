<?php

namespace App\Repositories;

use App\Models\AdministrativeRequest;
use App\Repositories\Interfaces\AdministrativeRequestRepositoryInterface;

class AdministrativeRequestRepository implements AdministrativeRequestRepositoryInterface
{
    public function all(): iterable
    {
        return AdministrativeRequest::all();
    }

    public function findById(int $id): ?AdministrativeRequest
    {
        return AdministrativeRequest::find($id);
    }

    public function create(array $data): AdministrativeRequest
    {
        return AdministrativeRequest::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $request = AdministrativeRequest::find($id);
        return $request ? $request->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $request = AdministrativeRequest::find($id);
        return $request ? $request->delete() : false;
    }
}
