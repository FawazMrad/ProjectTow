<?php

namespace App\Repositories;

use App\Models\Family;
use App\Repositories\Interfaces\FamilyRepositoryInterface;

class FamilyRepository implements FamilyRepositoryInterface
{
    public function all(): iterable
    {
        return Family::all();
    }

    public function findById(int $id): ?Family
    {
        return Family::find($id);
    }

    public function findByHead(int $headId): ?Family
    {
        return Family::where('head_id', $headId)->first();
    }

    public function create(array $data): Family
    {
        return Family::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $family = Family::find($id);
        return $family ? $family->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $family = Family::find($id);
        return $family ? $family->delete() : false;
    }
}
