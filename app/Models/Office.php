<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
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
        'manager_name',
        'staff_count',
        'opening_time',
        'closing_time'
    ];

    protected $casts = [
        'opening_time' => 'datetime',
        'closing_time' => 'datetime'
    ];
}
