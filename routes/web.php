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
    return redirect('login');
});



Route::group(['middleware' => ['role:admin']], function () {
    Route::group(['prefix' => 'admin'], function() {
        Route::get('/home', 'AdminController@index')->name('admin.home');
        Route::resource('mail', 'MailFileController');	
        Route::resource('folder', 'FolderController');	
    });
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
