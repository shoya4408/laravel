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
    route::get('news/create','admin\newscontroller@add');
    route::get('XXX','AAAcontroller@bbb');
    route::get('profile/create','admin\profilecontroller@add');
    route::get('profile/edit','profilecontroller\edit@add');
});