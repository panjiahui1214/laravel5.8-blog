<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function save(Request $request, $id = null) {
        if ($id) {
            $article = Article::find($id);
        }
        else {
            $article = new Article();
        }

        $article->title = $request->title;
        $article->keyword = $request->keyword;
        $article->description = $request->description;
        $article->text = $request->text;
        $article->save();

        return redirect('admin_article');
    }
}
