<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Family extends Model
{
    use HasFactory;

    protected $fillable = ['head_id'];


    public function Patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
    public function bills(): HasMany
    {
        return $this->hasMany(Bill::class);
    }

    public function head(): BelongsTo
    {
        return $this->belongsTo(Patient::class,'head_id');
    }

}
