<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ingredients::factory()->count(15)->create();
    }
}
