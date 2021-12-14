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
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


// ユーザー認証
Route::namespace('User')->prefix('user')->name('user.')->group(function() {
    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false
    ]);

    Route::middleware('auth:user')->group(function() {
        Route::resource('home', 'HomeController', ['only' => 'index']);
    });

});

// 管理者認証
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false
    ]);

    Route::middleware('auth:admin')->group(function () {
        Route::resource('home', 'HomeController', ['only' => 'index']);
    });

});