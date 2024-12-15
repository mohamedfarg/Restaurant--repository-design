<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'branch_id',
        'item_name',
        'quantity',
        'supplier',
        'cost'
    ];

    public function branch() {
        return $this->belongsTo(Branch::class);
    }
}
