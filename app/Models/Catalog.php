<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = [
        'title',
        'file_path',
        'cover_image',
        'is_active'
    ];
}
