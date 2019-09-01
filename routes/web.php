<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Home\IndexController@index');

//Auth::routes();

// 后台
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    // 会员管理
//    Route::get('user', function () {
//        return view('admin.user', ['users' => \App\User::all()]);
//    })->name('admin_user');

    // 文章管理
    Route::prefix('article')->group(function () {
        Route::get('/', function () {
            return view('admin.article', ['articles' => \App\Article::all()]);
        })->name('admin_article');

        Route::get('add', function () {
            return view('admin.article_post', ['tags' => \App\Tag::all()]);
        })->name('admin_article_add');
        Route::post('add', 'Admin\ArticleController@save');

        Route::get('edit/{id}', function ($id) {
            return view('admin.article_post', ['article' => \App\Article::find($id), 'tags' => \App\Tag::all()]);
        })->name('admin_article_edit');
        Route::post('edit/{id}', 'Admin\ArticleController@save');

        Route::get('delete/{id}', function ($id) {
            return \App\Article::destroy($id);
        })->name('admin_article_delete');
    });

    // 系统管理
    Route::get('system', function () {
        return view('admin.system');
    })->name('admin_system');
});