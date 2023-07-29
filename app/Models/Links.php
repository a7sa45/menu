<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'icon',
        'url',
        'store_id',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
