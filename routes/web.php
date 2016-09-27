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

Route::get('/', ['as'=>'home','uses'=>'PostsController@latest']);


Route::resource('posts', 'PostsController', array('only'=>array('index', 'show')));

Route::get('aboutnb', ['as'=>'about','uses'=>'PagesController@about']);
Route::get('contact', ['as'=>'contact', 'uses'=>'PagesController@contact']);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::any('/register','PostsController@redirectRegister');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::resource('/admin/posts', 'Admin\AdminPostsController');
Route::get('/logout', function(){

	Auth::logout();

	return redirect()->route('home');
})->name('logout');

