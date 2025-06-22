<?php

namespace App\Repositories\Interfaces;

use App\Models\Notification;

interface NotificationRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?Notification;
    public function findByUser(int $userId): iterable;
    public function findByPatient(int $patientId): iterable;
    public function findByChannel(string $channel): iterable;
    public function create(array $data): Notification;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
