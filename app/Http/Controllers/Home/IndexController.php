<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\ArticleTag;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $months = DB::table('articles')
            ->selectRaw('date_format(created_at, \'%Y-%m\') as month, count(*) as count')
            ->groupBy('month')
            ->get();

        return view('home.index', [
            'articles'  =>  Article::all(),
            'tags'      =>  Tag::all(),
            'tag0_cnt'  =>  ArticleTag::where('tag_id', 0)->count(),
            'months'    =>  $months
        ]);
    }
}
