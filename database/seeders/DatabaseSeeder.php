<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Visitor::factory(2)->create();
         \App\Question::factory(2)->create();
         \App\Product::factory(2)->create();
          \App\Models\Even::factory(2)->create();
         
    }
}
