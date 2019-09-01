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
Route::get('tag/{tag}', 'Home\IndexController@tag')->name('index_tag');
Route::get('month/{month}', 'Home\IndexController@month')->name('index_month');

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

    $menus = ['article', 'tag'];
    foreach ($menus as $menu) {
        Route::prefix($menu)->group(function () use ($menu) {
            $controller = 'Admin\\'.ucfirst($menu).'Controller';
            Route::get('/', $controller.'@index')->name('admin_'.$menu);

            Route::get('add', $controller.'@addView')->name('admin_'.$menu.'_add');
            Route::post('add', $controller.'@addPost');

            Route::get('edit/{id}', $controller.'@editView')->name('admin_'.$menu.'_edit');
            Route::post('edit/{id}', $controller.'@editPost');

            Route::get('delete/{id}', $controller.'@delete')->name('admin_'.$menu.'_delete');
        });
    }

    // 系统管理
//    Route::get('system', function () {
//        return view('admin.system');
//    })->name('admin_system');
});

// 兜底路由
Route::fallback(function () {
    return redirect()->route('index');
});