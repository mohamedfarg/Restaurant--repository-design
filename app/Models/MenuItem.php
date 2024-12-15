<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'menu_id',
        'name',
        'description',
        'price',
        'customization_options',
        'allergen_information',
        'nutritional_information',
        'availability_status',
        'image_path'
    ];

    public function menu() {
        return $this->belongsTo(Menu::class);
    }
}
