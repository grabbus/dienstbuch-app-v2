<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;

class Member extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthdate' => 'date',
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class)
            ->withPivot(['course_id', 'member_id', 'date_of_acceptance']);
    }
    public function achievementBadge(): HasMany
    {
        return $this->hasMany(AchievementBadge::class);
    }
    public function age(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->birthdate)->age
        );
    }
}
