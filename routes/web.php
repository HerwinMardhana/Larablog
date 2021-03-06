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

Route::group(['middleware'=>['web']], function() {

	Route::get('blog/{$slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle']);

	Route::get('/', 'PagesController@getHome');

	Route::get('about', 'PagesController@getAbout');

	Route::get('contact', 'PagesController@getContact');

	Route::resource('post', 'PostController');

});




