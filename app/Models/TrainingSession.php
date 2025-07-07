<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TrainingSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'week_start_date',
        'day_of_week',
        'start_time',
        'end_time'
    ];

//    public function attendanceLogs(): HasMany
//    {
//        return $this->hasMany(AttendanceLog::class, 'session_id');
//    }
    public function administrativeRequests(): HasMany
    {
        return $this->hasMany(AdministrativeRequest::class,'training_session_id');
    }

}
