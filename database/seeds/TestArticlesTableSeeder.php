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
                'title' => '我是php的文章',
                'tag_id' => '1',
                'keyword' => 'php',
                'description' => 'php是世界上最好的语言',
                'text' => '<p>php是世界上最好的语言~</p>',
                'created_at' => Date::now()
            ],
            [
                'title' => '我是java的文章',
                'tag_id' => '2',
                'keyword' => 'java',
                'description' => 'java是世界上最好的语言',
                'text' => '<p>java是世界上最好的语言~</p>',
                'created_at' => Date::now()
            ]
        ]);
    }
}
