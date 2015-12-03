<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Home\HomeController@index');
Route::get('about', 'Home\HomeController@about');
Route::get('portfolio', 'Home\HomeController@portfolio');
Route::get('portfolio/{slug}', 'Home\HomeController@website');
Route::get('resume', 'Home\HomeController@resume');
Route::get('testimonials', 'Home\HomeController@testimonials');
Route::get('news', 'Home\HomeController@news');
Route::get('contact', 'Home\HomeController@getContact');
Route::post('contact', 'Home\HomeController@postContact');

Route::resource('blog', 'Blog\PostsController@index');