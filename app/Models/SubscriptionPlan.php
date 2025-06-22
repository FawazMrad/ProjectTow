<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'discount_percentage',
        'free_sessions_limit',
        'description',
        'is_active',
        'points'
    ];

    // Define the types
    public const TYPES = [
        'MONTHLY' => 'Monthly',
        'YEARLY' => 'Yearly'
    ];

    public function patientSubscriptions(): HasMany
    {
        return $this->hasMany(PatientSubscription::class);
    }
}
