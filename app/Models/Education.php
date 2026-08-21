<?php
// Lokasi file: app/Models/Education.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'institution',
        'major',
        'degree',
        'year',
        'description',
        'sort_order',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderByDesc('year')->orderBy('sort_order');
    }
}
