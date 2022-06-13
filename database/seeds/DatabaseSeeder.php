<?php

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
        // $this->call(UserSeeder::class);
        /* \App\Visitor::factory(15)->create();*/
        \App\Question::factory(15)->create();
         
    }
}
