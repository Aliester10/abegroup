<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $fillable = [
        'office_address',
        'phone',
        'phone_alt',
        'email',
        'email_alt',
        'operational_hours',
        'map_embed',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
