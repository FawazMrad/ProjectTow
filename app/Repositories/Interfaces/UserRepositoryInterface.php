<?php

namespace App\Repositories\Interfaces;


namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function all(): iterable;

    public function findById(int $id): ?User;

    public function findByEmail(string $email,$type): ?User;
    public function create(array $data): User;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
    public function updatePassword(User $user, string $hashedPassword): bool;

    public function updateEmail(User $user, string $newEmail): bool;

    public function getWeeklySchedules(User $doctor);



}
