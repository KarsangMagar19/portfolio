<?php

namespace App\Models;

use App\ProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'category',
        'live_url',
        'github_url',
    ];

    protected function casts(): array
    {
        return [
            'category' => ProjectCategory::class,
        ];
    }

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technologies::class, 'project_technologies', 'project_id', 'technology_id');
    }
}
