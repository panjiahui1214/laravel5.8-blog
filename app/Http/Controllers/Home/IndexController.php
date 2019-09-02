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
    private $route_index = 'home.index';

    public function index() {
        $articles = Article::paginate(6);
        return view($this->route_index, $this->common($articles));
    }

    public function tag($tag) {
        $articles = Tag::where('name', $tag)->first()->articles()->paginate(6);
        return view($this->route_index, $this->common($articles));
    }

    public function month($month) {
        $articles = Article::whereRaw('date_format(created_at, \'%Y-%m\') = ?', $month)->paginate(6);
        return view($this->route_index, $this->common($articles));
    }

    public function common($articles) {
        $months = DB::table('articles')
            ->selectRaw('date_format(created_at, \'%Y-%m\') as month, count(*) as count')
            ->groupBy('month')
            ->get();

        return [
            'articles'  =>  $articles,
            'tags'      =>  Tag::all(),
            'months'    =>  $months
        ];
    }
}
