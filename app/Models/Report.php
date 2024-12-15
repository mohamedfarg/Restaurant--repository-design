<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    
    protected $fillable = [
        'branch_id',
        'report_type',
        'generated_at',
        'content'
    ];
}
