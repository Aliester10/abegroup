<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;


    protected $table = 'testimonials';
    protected $fillable = [
        'client_name',
        'position',
        'company',
        'testimonial_text',
        'rating',
        'profile_image',
        'is_visible',
    ];


    protected $casts = [
        'is_visible' => 'boolean',
        'rating' => 'integer',
    ];
}
