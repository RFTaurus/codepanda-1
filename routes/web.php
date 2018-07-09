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

Route::get('/', function () {
    return view('pages.index');
})->name('index');
Route::post('/createMsg', 'MessageController@create')->name('createMsg');
Route::get('/thanks', function(){
    return view('pages.thanks');
});

// Route::post('admin/login', 'Auth\AuthController@login')->name('login');
// Route::get('login',  'Auth\AuthController@showLoginForm');
// Route::get('logout', 'Auth\AuthController@logout');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', 'AdminController@login')->name('login');
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('message', 'AdminController@message')->name('message');
});

Route::get('/home', function(){
    return redirect('/admin/');
});
Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});
// Route::get('register', function(){
//     return redirect('/admin/');
// });
// Route::get('/login', function(){
//     return redirect('/admin/login');
// });
