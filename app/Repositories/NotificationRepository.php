<?php

namespace App\Repositories;

use App\Models\Notification;
use App\Repositories\Interfaces\NotificationRepositoryInterface;

class NotificationRepository implements NotificationRepositoryInterface
{
    public function all(): iterable
    {
        return Notification::all();
    }

    public function findById(int $id): ?Notification
    {
        return Notification::find($id);
    }

    public function findByUser(int $userId): iterable
    {
        return Notification::where('user_id', $userId)->get();
    }

    public function findByPatient(int $patientId): iterable
    {
        return Notification::where('patient_id', $patientId)->get();
    }

    public function findByChannel(string $channel): iterable
    {
        return Notification::where('channel', $channel)->get();
    }

    public function create(array $data): Notification
    {
        return Notification::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $notification = Notification::find($id);
        return $notification ? $notification->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $notification = Notification::find($id);
        return $notification ? $notification->delete() : false;
    }
}
