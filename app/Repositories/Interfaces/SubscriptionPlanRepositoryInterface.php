<?php

namespace App\Repositories\Interfaces;

use App\Models\SubscriptionPlan;

interface SubscriptionPlanRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?SubscriptionPlan;
    public function findActivePlans(): iterable;
    public function create(array $data): SubscriptionPlan;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
