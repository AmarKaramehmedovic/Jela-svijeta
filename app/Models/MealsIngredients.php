<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealsIngredients extends Model
{
    use HasFactory;

    protected $table = 'meals_ingredients';

    public $timestamps = false;
}
