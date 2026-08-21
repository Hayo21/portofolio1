<?php
// Lokasi file: app/Models/Experience.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'organization',
        'year',
        'description',
        'sort_order',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderByDesc('year')->orderBy('sort_order');
    }
}
