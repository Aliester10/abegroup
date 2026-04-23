<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'year',
        'title',
        'description',
        'label',
        'position',
        'theme',
        'tags',
        'is_active',
        'order',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_active' => 'boolean',
    ];
}
