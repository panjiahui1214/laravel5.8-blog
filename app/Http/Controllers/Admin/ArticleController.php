<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index() {
        return view('admin.article', ['articles' => Article::all()]);
    }

    public function addView() {
        return view('admin.article_post', ['tags' => Tag::all()]);
    }
    public function addPost(Request $request) {
        DB::transaction(function () use ($request) {
            $article = new Article();
            $this->save($request, $article);
            $article->tags()->attach($request->article_tags);
        });

        return redirect()->route('admin_article');
    }

    public function editView($id) {
        $article = Article::find($id);
        $tags = Tag::all();
        $article_tags = [];
        foreach ($article->tags as $tag) {
            array_push($article_tags, $tag->id);
        }
        return view('admin.article_post', [
            'article'       =>  $article,
            'tags'          =>  $tags,
            'article_tags'  =>  $article_tags
        ]);
    }
    public function editPost(Request $request, $id) {
        DB::transaction(function () use ($request, $id) {
            $article = Article::find($id);
            $this->save($request, $article);
            $article->tags()->detach();
            $article->tags()->attach($request->article_tags);
        });

        return redirect()->route('admin_article');
    }

    public function save($request, $article) {
        $article->title = $request->title;
        $article->keyword = $request->keyword;
        $article->description = $request->description;
        $article->text = $request->text;
        $article->save();
    }

    public function delete($id) {
        Article::destroy($id);
        return redirect()->route('admin_article');
    }
}
