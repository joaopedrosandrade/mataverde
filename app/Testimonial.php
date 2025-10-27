<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name', 'position', 'content', 'photo', 'is_active', 'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
