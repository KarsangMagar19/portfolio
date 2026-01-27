<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = [];

    public function casts(): array
    {
        return [
            'is_current' => 'boolean',
        ];
    }
}
