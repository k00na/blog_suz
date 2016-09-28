<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
|--------------------------------------------------------------------------
| Visitors Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', ['as'=>'home','uses'=>'PostsController@latest']);
Route::post('/', ['as'=>'filter', 'uses'=>'PostsController@filter']);

Route::get('/about', ['as'=>'about','uses'=>'PagesController@about']);
Route::get('/contact', ['as'=>'contact', 'uses'=>'PagesController@contact']);

Route::any('/register','PostsController@redirectRegister');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Auth::routes();
Route::resource('/admin/posts', 'Admin\AdminPostsController');
Route::get('/logout', function(){

	Auth::logout();

	return redirect()->route('home');
})->name('logout');

