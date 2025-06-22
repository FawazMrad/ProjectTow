<?php

namespace App\Repositories;

use App\Models\PreventiveCarePlan;
use App\Repositories\Interfaces\PreventiveCarePlanRepositoryInterface;

class PreventiveCarePlanRepository implements PreventiveCarePlanRepositoryInterface
{
    public function all(): iterable
    {
        return PreventiveCarePlan::all();
    }

    public function findById(int $id): ?PreventiveCarePlan
    {
        return PreventiveCarePlan::find($id);
    }

    public function findByPatient(int $patientId): iterable
    {
        return PreventiveCarePlan::where('patient_id', $patientId)->get();
    }

    public function findActivePlans(): iterable
    {
        return PreventiveCarePlan::where('is_active', true)->get();
    }

    public function create(array $data): PreventiveCarePlan
    {
        return PreventiveCarePlan::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $plan = PreventiveCarePlan::find($id);
        return $plan ? $plan->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $plan = PreventiveCarePlan::find($id);
        return $plan ? $plan->delete() : false;
    }
}
