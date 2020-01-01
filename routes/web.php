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

Route::get('list', 'CartController@list');

Route::get('id', 'CartController@listid');

Route::get('add', 'CartController@add');

Route::get('edit', 'CartController@edit');

Route::get('delete', 'CartController@delete');