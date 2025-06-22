<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PreventiveCarePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'description',
        'start_date',
        'next_check_date',
        'reminder_interval',
        'is_active'
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
