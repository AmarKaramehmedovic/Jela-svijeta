<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(
            '\App\Models\Category',
            'id',
            'category_id'
        );
    }

    public function tags()
    {
        return $this->hasManyThrough(
            '\App\Models\Tags',
            '\App\Models\MealsTags',
            'meal_id',
            'id',
            'id',
            'tag_id'
        );
    }

    public function ingredients()
    {
        return $this->hasManyThrough(
            '\App\Models\Ingredients',
            '\App\Models\MealsIngredients',
            'meal_id',
            'id',
            'id',
            'ingredient_id'
        );
    }
}
