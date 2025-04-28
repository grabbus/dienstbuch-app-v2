<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(
            Member::class,
            'course_member',
            'course_id',
            'member_id'
        )
            ->withPivot(['date_of_acceptance']);
    }
}
