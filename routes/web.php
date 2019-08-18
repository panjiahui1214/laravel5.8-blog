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

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('user', function () {
        return view('admin.user', ['users' => \App\User::all()]);
    });
    Route::get('article', function () {
        return view('admin.article');
    });
    Route::get('system', function () {
        return view('admin.system');
    });
});