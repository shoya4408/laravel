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
    Route::get('profile/create','admin\profilecontroller@add')->middleware('auth');
    route::post('profile/create','admin\profilecontroller@create')->middleware('auth');
    route::get('profile/edit','admin\profilecontroller@edit')->middleware('auth');
    route::post('profile/edit','admin\profilecontroller@update')->middleware('auth');
    route::get('profile','admin\profilecontroller@index')->middleware('auth');
    route::get('profile/delet','admin\profilecontroller@delete')->middleware('auth');

    route::get('news/create','admin\newscontroller@add')->middleware('auth');
    route::get('news','admin\newscontroller@index')->middleware('auth');
    Route::post('news/create', 'admin\newscontroller@create')->middleware('auth');
    Route::get('news/edit', 'admin\newscontroller@edit')->middleware('auth');
    Route::post('news/edit', 'admin\newscontroller@update')->middleware('auth');
    route::get('news/delete','admin\newscontroller@delete')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'NewsController@index');
