<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PatientSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_plan_id',
        'patient_id',
        'start_date',
        'end_date',
        'used_free_sessions',
        'is_active'
    ];

    public function subscriptionPlan(): BelongsTo
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function bills(): HasOne
    {
        return $this->hasOne(Bill::class);
    }
}
