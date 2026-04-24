<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sustainability extends Model
{
    use HasFactory;

    protected $table = 'sustainability_commitments';

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image_url',
        'button_text',
        'button_url',
        'points',
        'is_active',
    ];

    protected $casts = [
        'points' => 'array',
        'is_active' => 'boolean',
    ];
}
