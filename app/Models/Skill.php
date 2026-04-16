<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'name_np',
        'category',
        'proficiency',
    ];

    protected $casts = [
        'proficiency' => 'integer',
    ];
}
