<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        return view('home.index', [
            'articles'  =>  Article::all(),
            'tags'      =>  Tag::all(),
        ]);
    }
}
