<?php
// Lokasi file: app/Models/Project.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'problem',
        'solution',
        'features',
        'technologies',
        'challenges',
        'result',
        'image',
        'gallery',
        'category',
        'github_url',
        'live_url',
        'featured',
        'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'technologies' => 'array',
        'gallery' => 'array',
        'featured' => 'boolean',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('created_at');
    }
}
