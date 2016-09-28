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
Route::get('/', ['as'=>'home','uses'=>'VisitorPostsController@latest']);
Route::post('/', ['as'=>'filter', 'uses'=>'VisitorPostsController@filter']);
Route::any('/register','VisitorPostsController@redirectRegister');

Route::get('/about', ['as'=>'about','uses'=>'PagesController@about']);
Route::get('/contact', ['as'=>'contact', 'uses'=>'PagesController@contact']);


/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();

Route::get('/logout', function(){

	Auth::logout();

	return redirect()->route('home');
})->name('logout');

Route::get('/admin', function(){

	if(Auth::check()){
		return redirect()->route('posts.index');	
	}

	return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| Admin Posts Routes
|--------------------------------------------------------------------------
|
*/

Route::resource('/admin/posts', 'Admin\AdminPostsController');

/*
|--------------------------------------------------------------------------
| Admin Categories Routes
|--------------------------------------------------------------------------
|
*/

Route::resource('/admin/categories', 'Admin\AdminCategoriesController');