<?php

namespace App\Repositories;

use App\Models\PatientSubscription;
use App\Repositories\Interfaces\PatientSubscriptionRepositoryInterface;

class PatientSubscriptionRepository implements PatientSubscriptionRepositoryInterface
{
    public function all(): iterable
    {
        return PatientSubscription::all();
    }

    public function findById(int $id): ?PatientSubscription
    {
        return PatientSubscription::find($id);
    }

    public function findByPatient(int $patientId): iterable
    {
        return PatientSubscription::where('patient_id', $patientId)->get();
    }

    public function findActiveByPatient(int $patientId): iterable
    {
        return PatientSubscription::where('patient_id', $patientId)
            ->where('is_active', true)
            ->get();
    }

    public function create(array $data): PatientSubscription
    {
        return PatientSubscription::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $subscription = PatientSubscription::find($id);
        return $subscription ? $subscription->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $subscription = PatientSubscription::find($id);
        return $subscription ? $subscription->delete() : false;
    }
}
