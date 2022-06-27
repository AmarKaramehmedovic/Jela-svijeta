<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MealsIngredientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ingredient_id' => $this->faker->biasedNumberBetween(1, 15),
            'meal_id' => $this->faker->biasedNumberBetween(1, 7),
        ];
    }
}
