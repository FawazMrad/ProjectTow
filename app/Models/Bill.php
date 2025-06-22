<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_id',
        'patient_id',
        'patient_subscription_id',
        'payment_status',
        'remain_amount',
        'discount',
        'is_family_bill',
        'bill_amount'
    ];

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function patientSubscription(): BelongsTo
    {
        return $this->belongsTo(PatientSubscription::class);
    }
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
