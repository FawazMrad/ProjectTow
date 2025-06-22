<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_id',
        'medical_study_id',
        'phone',
        'gender',
        'allergies',
        'full_name',
        'points',
        'is_study_volunteer',
        'birth_date'
    ];

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }

    public function medicalStudy(): BelongsTo
    {
        return $this->belongsTo(MedicalStudy::class);
    }
    public function subscriptions(): HasMany
    {
        return $this->hasMany(PatientSubscription::class);
    }
    public function bills(): HasMany
    {
        return $this->hasMany(Bill::class);
    }
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function preventiveCarePlans(): HasMany
    {
        return $this->hasMany(PreventiveCarePlan::class);
    }
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
    public function head(): HasOne
    {
        return $this->hasOne(Family::class,'head_id');
    }


}
