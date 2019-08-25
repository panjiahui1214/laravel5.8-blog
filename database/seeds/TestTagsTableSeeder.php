<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

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
                'name'  =>  'php',
                'created_at'    =>  Date::now()
            ],
            [
                'name'  =>  'java',
                'created_at'    =>  Date::now()
            ]
        ]);
    }
}
