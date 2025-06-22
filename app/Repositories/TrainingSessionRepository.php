<?php

namespace App\Repositories;

use App\Models\TrainingSession;
use App\Repositories\Interfaces\TrainingSessionRepositoryInterface;

class TrainingSessionRepository implements TrainingSessionRepositoryInterface
{
    public function all(): iterable
    {
        return TrainingSession::all();
    }

    public function findById(int $id): ?TrainingSession
    {
        return TrainingSession::find($id);
    }

    public function create(array $data): TrainingSession
    {
        return TrainingSession::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $session = TrainingSession::find($id);
        return $session ? $session->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $session = TrainingSession::find($id);
        return $session ? $session->delete() : false;
    }
}
