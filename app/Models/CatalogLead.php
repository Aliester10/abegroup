<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogLead extends Model
{
    protected $fillable = [
        'catalog_id',
        'name',
        'email',
        'phone',
        'company'
    ];

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }
}
