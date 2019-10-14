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

Route::get('/', function () {
    return view('welcome');
});

//Route::group(['prefix' => 'admin'], function() {
//    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');//
//});

//↓13章
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
   Route::get('news/create', 'Admin\NewsController@add');
   Route::post('news/create', 'Admin\NewsController@create'); //13章追記
});

//課題//
//PHP/Laravel 10 ControllerとViewが連携できるようにしよう↓
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('profile/edit', 'Admin\ProfileController@edit'); //13章課題追加
    Route::post('profile/edit', 'Admin\profileController@update');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/cleate', 'Admin\ProfileController@create'); //13章課題追記
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
