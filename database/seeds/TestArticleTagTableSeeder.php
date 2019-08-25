<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TestArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_tag')->insert([
            [
                'article_id'    =>  1,
                'tag_id'        =>  1,
                'created_at'    =>  Date::now()
            ],
            [
                'article_id'    =>  2,
                'tag_id'        =>  2,
                'created_at'    =>  Date::now()
            ],
            [
                'article_id'    =>  3,
                'tag_id'        =>  1,
                'created_at'    =>  Date::now()
            ],
            [
                'article_id'    =>  3,
                'tag_id'        =>  2,
                'created_at'    =>  Date::now()
            ],
            [
                'article_id'    =>  4,
                'tag_id'        =>  '',
                'created_at'    =>  Date::now()
            ]
        ]);
    }
}
