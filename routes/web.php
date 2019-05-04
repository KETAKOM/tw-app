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

Auth::routes();

// この中はログインされている場合のみルーティングされる
Route::group(['middleware' => ['auth']], function () {
    //SPAにしたいンゴ
    Route::get('/', 'HomeController@index')->where('any', '.*');

    Route::get('/userlist', 'UserController@list')->where('any', '.*');

    Route::get('/{any}', 'HomeController@index')->where('any', '.*');
});