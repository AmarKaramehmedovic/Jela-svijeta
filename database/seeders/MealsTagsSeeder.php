<?php

namespace Database\Seeders;

use App\Models\MealsTags;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MealsTags::factory()->count(14)->create();
    }
}
