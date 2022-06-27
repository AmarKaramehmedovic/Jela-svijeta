<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->sentence(10, true),
            'status' => $this->faker->boolean(),
            'category_id' => $this->faker->biasedNumberBetween(1, 3),
//            'tags_id' => $this->faker->biasedNumberBetween(1, 10),
//            'ingredients_id' => $this->faker->biasedNumberBetween(1, 15),
        ];
    }
}
