<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TestUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      =>  'test',
            'email'     =>  'test@qq.com',
            'password'  =>  bcrypt('123456'),
            'created_at'    =>  Date::now()
        ]);
    }
}
