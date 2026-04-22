<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyHighlight extends Model
{
    use HasFactory;

    protected $table = 'company_highlights';

    protected $fillable = [
        'badge',
        'title',
        'description_top',
        'image',
    ];
}