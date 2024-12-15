<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'name',
        'type',
        'value',
        'start_date',
        'end_date',
        'branch_id'
    ];
}
