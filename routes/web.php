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

/*Route::get('/foo', function () {
    return view('admin.User.index');
});*/

Route::resource('user', 'UserController');

Route::resource('category', 'CategoryController');

Route::resource('message', 'MessagesController');

Route::resource('post', 'PostController');

Route::resource('cart', 'CartController');

Route::resource('linecart', 'LineCartController');

Route::get('/filter/{id}', 'PostController@filter')->name('filter');

Route::get('/verified/{id}/{verified}', 'PostController@verified')->name('verified');

Route::get('/imageUploadPost', 'PostController@imageUploadPost')->name('imageUploadPost');		


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
