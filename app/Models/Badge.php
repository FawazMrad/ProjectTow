<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Badge extends Model
{
    protected $fillable = ['name', 'criteria'];

    public function trainerBadges()
    {
        return $this->hasMany(TrainerBadge::class, 'badge_id');
    }
}
