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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'ItemController@index')->name('item');
Route::get('/item/create', 'ItemController@create')->name('create');
Route::post('/item/store', 'ItemController@store')->name('store');
Route::get('/item/show{id}', 'ItemController@show')->name('show');
Route::get('/item/edit{id}', 'ItemController@edit')->name('edit');
Route::post('/item/update', 'ItemController@update')->name('update');
Route::get('/item/destroy/{id}', 'ItemController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
