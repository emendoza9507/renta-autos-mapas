<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalPoint extends Model
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
        'available_cars'
    ];

}
