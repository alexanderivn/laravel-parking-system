<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'unique_code',
        'plate_number',
        'clock_in',
        'clock_out',
    ];
}