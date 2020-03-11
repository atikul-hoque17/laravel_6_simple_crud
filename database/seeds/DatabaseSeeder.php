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
        // $this->call(UsersTableSeeder::class);act
    // factory(App\Category::class,100)->create();

    factory(App\product::class,20)->create();

    }
}
