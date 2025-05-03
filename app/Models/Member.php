<?php

namespace App\Models;

use App\CreatedUpdatedBy;
use Database\Factories\MemberFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Member extends Model
{
    use CreatedUpdatedBy;

    protected $table = 'members';
    protected $guarded = [];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthdate' => 'date',
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(
            Course::class,
            'course_member',
        'member_id',
            'course_id'
        )
            ->withPivot(['date_of_acceptance']);
    }
    public function achievementBadges(): BelongsToMany
    {
        return $this->belongsToMany(
            AchievementBadge::class,
            'achievement_badge_member',
        'member_id',
        'achievement_badge_id'
        )
            ->withPivot(['date_of_acceptance']);
    }

    public function getFullNameAttribute(): string
    {
        return "{$this->firstname} {$this->lastname}";
    }

    protected static function newFactory()
    {
        return MemberFactory::new();
    }
}
