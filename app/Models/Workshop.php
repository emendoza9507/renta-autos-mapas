<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'website',
        'image',
        'description',
        'latitude',
        'longitude',
        'status',
        'available_mechanics',
        'services',
        'opening_time',
        'closing_time'
    ];

    protected $casts = [
        'services' => 'array',
        'opening_time' => 'datetime',
        'closing_time' => 'datetime'
    ];
}
