<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'location',
        'opening_hours',
        'closing_hours',
        'delivery_areas',
        'seating_capacity',
        'branch_settings'
    ];
}
