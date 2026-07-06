<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $fillable = [
        'logo',
        'office_address',
        'phone',
        'phone_alt',
        'email',
        'email_alt',
        'operational_hours',
        'map_embed',
        'is_active',
        'facebook',
        'instagram',
        'linkedin',
        'footer_bg_color',
        'footer_text_color'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
