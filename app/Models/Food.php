<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_name',
        'food_type',
        'food_composition',
        'price_of_one_serving_of_food'
    ];
}
