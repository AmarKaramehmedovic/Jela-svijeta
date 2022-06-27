<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MealsIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MealsIngredients::factory()->count(14)->create();
    }
}
