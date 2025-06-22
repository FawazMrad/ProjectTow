<?php

namespace App\Repositories;

use App\Models\SubscriptionPlan;
use App\Repositories\Interfaces\SubscriptionPlanRepositoryInterface;

class SubscriptionPlanRepository implements SubscriptionPlanRepositoryInterface
{
    public function all(): iterable
    {
        return SubscriptionPlan::all();
    }

    public function findById(int $id): ?SubscriptionPlan
    {
        return SubscriptionPlan::find($id);
    }

    public function findActivePlans(): iterable
    {
        return SubscriptionPlan::where('is_active', true)->get();
    }

    public function create(array $data): SubscriptionPlan
    {
        return SubscriptionPlan::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $plan = SubscriptionPlan::find($id);
        return $plan ? $plan->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $plan = SubscriptionPlan::find($id);
        return $plan ? $plan->delete() : false;
    }
}
