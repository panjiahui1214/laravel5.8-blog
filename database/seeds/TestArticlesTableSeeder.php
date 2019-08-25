<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TestArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title'         =>  '我是php的文章',
                'keyword'       =>  'php',
                'description'   =>  'php是世界上最好的语言',
                'text'          =>  '<p>php是世界上最好的语言~</p>',
                'created_at'    =>  Date::now()
            ],
            [
                'title'         =>  '我是java的文章',
                'keyword'       =>  'java',
                'description'   =>  'java是世界上最好的语言',
                'text'          =>  '<p>java是世界上最好的语言~</p>',
                'created_at'    =>  Date::now()
            ],
            [
                'title'         =>  '我是混合的文章',
                'keyword'       =>  'php,java',
                'description'   =>  'php和java都是世界上最好的语言',
                'text'          =>  '<p>php和java都是世界上最好的语言~</p>',
                'created_at'    =>  Date::now()
            ],
            [
                'title'         =>  '我是没有标签的文章',
                'keyword'       =>  '',
                'description'   =>  '',
                'text'          =>  '<p>啦啦啦~</p>',
                'created_at'    =>  Date::now()
            ]
        ]);
    }
}
