<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'is_active', 'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
