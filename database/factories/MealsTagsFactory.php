<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MealsTagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_id' => $this->faker->biasedNumberBetween(1, 10),
            'meal_id' => $this->faker->biasedNumberBetween(1, 7),
        ];
    }
}
