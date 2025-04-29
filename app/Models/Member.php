<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\MemberFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Member extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthdate' => 'date',
    ];

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
    public function age(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->birthdate)->age
        );
    }

    protected static function newFactory()
    {
        return MemberFactory::new();
    }
}
