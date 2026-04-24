<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'image',
        'is_active',
        'order',
        'description',
        'description_2',
        'point_1',
        'point_2',
        'point_3',
        'button_text',
        'button_link',
        'image_url',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];
}
