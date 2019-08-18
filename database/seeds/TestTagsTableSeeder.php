<?php

use Illuminate\Database\Seeder;

class TestTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'php'
            ],
            [
                'name' => 'java'
            ]
        ]);
    }
}
