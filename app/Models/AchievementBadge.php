<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AchievementBadge extends Model
{
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(
            Member::class,
            'achievement_badge_member',
            'member_id',
            'achievement_badge_id'
        )
            ->withPivot(['date_of_acceptance']);
    }

    public function getFullNameAttribute(): string
    {
     return ucfirst($this->name) . ' - ' . ucfirst($this->level);
    }
}
