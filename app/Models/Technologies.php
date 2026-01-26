<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technologies extends Model
{
    protected $fillable = ['title'];

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_technologies', 'technology_id', 'project_id');
    }
}
