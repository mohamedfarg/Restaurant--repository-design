<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'order_id',
        'driver_name',
        'delivery_address',
        'status',
        'estimated_time'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
