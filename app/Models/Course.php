<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    public function member(): BelongsToMany
    {
        return $this->belongsToMany(Member::class)
            ->withPivot(['course_id', 'member_id', 'date_of_acceptance']);
    }
}
