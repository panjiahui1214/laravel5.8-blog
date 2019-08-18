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
//         $this->call(TestUsersTableSeeder::class);
//         $this->call(TestTagsTableSeeder::class);
         $this->call(TestArticlesTableSeeder::class);
    }
}
