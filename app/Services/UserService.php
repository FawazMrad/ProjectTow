<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function doctorLogin(array $credentials): ?array
    {
        $user = $this->userRepository->findDoctorByEmail($credentials['email']);

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return null;
        }


        $token = $user->createToken($credentials['device_name'])->plainTextToken;


        return [
            'user' => $user,
            'token' => $token,
        ];
    }

    public function getReceptionists(): ?iterable{
        $receptionists=$this->userRepository->indexReceptionists();
        return $receptionists;
    }

    public function getUser(int $id): ?User
    {
        $receptionist=$this->userRepository->findById($id);
        return $receptionist;
    }
    public function deleteUser(int $id): bool
    {
        return $this->userRepository->delete($id);
    }
    public function getLogs (int $id)
    {
        return $this->userRepository->getLogs($id);
    }
    public function createUser(array $credentials): ?User
    {
        return $this->userRepository->create($credentials);
    }
    public function updatePassword(User $user, array $data): bool
    {
        if ($user->email !== $data['email']) {
            return false;
        }

        $hashed = Hash::make($data['password']);
        return $this->userRepository->updatePassword($user, $hashed);
    }

    public function updateEmail(User $user, array $data): bool
    {
        if ($user->email !== $data['email']) {
            return false;
        }

        return $this->userRepository->updateEmail($user, $data['new_email']);
    }
    public function getWeeklySchedules(User $doctor)
    {
        return $this->userRepository->getWeeklySchedules($doctor);
    }



}
