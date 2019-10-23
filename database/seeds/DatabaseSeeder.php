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
        factory('App\User',15)->create();
        factory('App\Post',15)->create();
        factory('App\Comment',20)->create();
    }
}
