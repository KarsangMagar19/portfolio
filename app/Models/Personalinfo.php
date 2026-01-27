<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personalinfo extends Model
{
    protected $guarded = [];

    public function casts(): array
    {
        return [
            'is_available' => 'boolean',
        ];
    }
}
