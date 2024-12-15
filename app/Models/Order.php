<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

        protected $fillable = [
            'branch_id',
            'customer_id',
            'order_type',
            'status',
            'total_amount',
            'order_date'
        ];
    
        public function customer() {
            return $this->belongsTo(Customer::class);
        }
  
    
}
