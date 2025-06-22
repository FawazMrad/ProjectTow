<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdministrativeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'requester_id',
        'training_session_id',
        'target_user_id',
        'status',
        'date_requested',
        'description',
        'type'
    ];

    public function requester(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    public function trainingSession(): BelongsTo
    {
        return $this->belongsTo(TrainingSession::class,'training_session_id');
    }

    public function targetUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'target_user_id');
    }
}
