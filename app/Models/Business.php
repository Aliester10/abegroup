<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Business extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'businesses';

    // Kolom yang boleh diisi (Mass Assignment)
    protected $fillable = [
        'name',
        'category',
        'slug',
        'image',
        'website_link',
        'ecomerce_link',
        'description',
        'is_active',
        'order',
    ];

    // Konversi tipe data otomatis
    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Otomatis membuat slug dari nama saat data dibuat
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($business) {
            if (empty($business->slug)) {
                $business->slug = Str::slug($business->name);
            }
        });
    }
}
