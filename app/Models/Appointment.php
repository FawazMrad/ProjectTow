<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'receptionist_id',
        'parent_appointment_id',
        'bill_id',
        'medical_study_id',
        'start_time',
        'end_time',
        'notes',
        'status',
        'type'
    ];

    // Status constants
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_APPROVED = 'APPROVED';
    public const STATUS_SCHEDULED = 'SCHEDULED';
    public const STATUS_REJECTED = 'REJECTED';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_ABSENCE = 'ABSENCE';
    public const STATUS_WITHDRAWN = 'WITHDRAWN';

    // Type constants
    public const TYPE_TREATMENT = 'TREATMENT';
    public const TYPE_CLEANING = 'CLEANING';
    public const TYPE_BEAUTY = 'BEAUTY';
    public const TYPE_CHILDREN = 'CHILDREN';
    public const TYPE_MEDICAL_STUDY = 'MEDICAL_STUDY';

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function receptionist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receptionist_id');
    }

    public function parentAppointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class, 'parent_appointment_id');
    }

    public function childAppointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'parent_appointment_id');
    }

    public function bill(): BelongsTo
    {
        return $this->belongsTo(Bill::class);
    }

    public function medicalStudy(): BelongsTo
    {
        return $this->belongsTo(MedicalStudy::class);
    }
    public function images(): HasMany
    {
        return $this->hasMany(AppointmentImage::class);
    }
}
