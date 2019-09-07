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

// 前台
Route::get('/', 'Home\IndexController@index')->name('index');
Route::get('tag/{tag}', 'Home\IndexController@tag')->name('index.tag');
Route::get('month/{month}', 'Home\IndexController@month')->name('index.month');
Route::get('article/{id}', 'Home\IndexController@article')->name('index.article');

//Auth::routes();

// 后台
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    // 会员管理
//    Route::get('user', function () {
//        return view('admin.user', ['users' => \App\User::all()]);
//    })->name('admin.user');

    $menus = ['article', 'tag'];
    foreach ($menus as $menu) {
        Route::name('admin.')->prefix($menu)->group(function () use ($menu) {
            $controller = 'Admin\\'.ucfirst($menu).'Controller';
            Route::get('/', $controller.'@index')->name($menu);

            Route::get('add', $controller.'@addView')->name($menu.'.add');
            Route::post('add', $controller.'@addPost');

            Route::get('edit/{id}', $controller.'@editView')->name($menu.'.edit');
            Route::post('edit/{id}', $controller.'@editPost');

            Route::post('delete/{id}', $controller.'@delete')->name($menu.'.delete');
        });
    }

    // 系统管理
//    Route::get('system', function () {
//        return view('admin.system');
//    })->name('admin.system');
});

// 兜底路由
Route::fallback(function () {
    return redirect()->route('index');
});