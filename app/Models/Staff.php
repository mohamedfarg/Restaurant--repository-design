<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'branch_id',
        'name',
        'role',
        'email',
        'phone'
    ];

    public function branch() {
        return $this->belongsTo(Branch::class);
    }
}
