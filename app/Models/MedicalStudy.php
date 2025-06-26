<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'is_active'
    ];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    public function volunteers(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
