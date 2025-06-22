<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'patient_id',
        'title',
        'body',
        'channel',
        'status',
        'is_scheduled',
        'sent_at'
    ];

    // Channel constants
    public const CHANNEL_IN_APP = 'IN_APP';
    public const CHANNEL_SMS = 'SMS';
    public const CHANNEL_WHATSAPP = 'WHATSAPP';
    public const CHANNEL_CALL = 'CALL';

    // Status constants
    public const STATUS_SENT = 'SENT';
    public const STATUS_FAILED = 'FAILED';


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
