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
    return view('pages.index');
})->name('index');
Route::post('/createMsg', 'MessageController@create')->name('createMsg');
Route::get('/thanks', function(){
    return view('pages.thanks');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
