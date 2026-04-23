<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'content',
        'image',
        'is_active'
    ];

    /**
     * Daftar kategori yang tersedia.
     */
    public const CATEGORIES = [
        'pencapaian'     => 'Pencapaian',
        'keberlanjutan'  => 'Keberlanjutan',
        'penghargaan'    => 'Penghargaan',
        'berita'         => 'Berita',
        'cerita-inovasi' => 'Cerita Inovasi',
        'pengumuman'     => 'Pengumuman',
    ];

    /**
     * Get label kategori.
     */
    public function getCategoryLabelAttribute(): string
    {
        return self::CATEGORIES[$this->category] ?? ucfirst($this->category);
    }
}