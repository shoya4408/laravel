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
route::group(['prefix' => 'admin'],function(){
    Route::get('profile/create','admin\profilecontroller@add');
    route::post('profile/create','admin\profilecontroller@create');
    route::get('news/create','admin\newscontroller@add')->middleware('auth');
    route::get('XXX','AAAcontroller@bbb');
    route::get('profile/edit','admin\profilecontroller@edit')->middleware('auth');
    route::get('profile/edit','admin\profilecontroller@update');
    route::get('profile/edit','admin\profilecontroller@add');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'admin\newscontroller@add');
     Route::post('news/create', 'admin\newscontroller@create'); # 追記
});