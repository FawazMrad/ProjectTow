<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Carbon\Carbon;

class UserRepository implements UserRepositoryInterface
{
    public function all(): iterable
    {
        return User::all();
    }

    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    public function findDoctorByEmail(string $email): ?User
    {
        return User::where('email', $email)
            ->where('role', 'doctor')
            ->first();
    }
    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $user = User::find($id);
        return $user ? $user->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $user = User::find($id);
        return $user ? $user->delete() : false;
    }
    public function indexReceptionists(): iterable
    {
        return User::where('role', 'RECEPTIONIST')->get();
    }
    public function getLogs(int $id)
    {
        $user=$this->findById($id);
        return $user->attendanceLogs()->get()->sortByDesc('created_at');
    }
    public function updatePassword(User $user, string $hashedPassword): bool
    {
        $user->password = $hashedPassword;
        return $user->save();
    }

    public function updateEmail(User $user, string $newEmail): bool
    {
        $user->email = $newEmail;
        return $user->save();
    }
    public function getWeeklySchedules(User $doctor){
        return $doctor->weeklySchedules()->get();
    }

}
