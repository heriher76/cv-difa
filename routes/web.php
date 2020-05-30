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

Route::get('/', 'PagesController@index');

Route::get('/calculator', 'PagesController@calc');

Route::get('/about', 'PagesController@about');

Route::post('/send-message', 'MessageController@store');

Auth::routes();

// Group Auth middleware
Route::group(["middleware" => "auth", "prefix" => "admin"], function(){
	Route::get('/', 'AdminPagesController@dashboard');
	
	Route::get('/my-profile', 'Admin\MyProfileController@index');
	Route::put('/my-profile', 'Admin\MyProfileController@update');
	
	Route::get('/about-me', 'Admin\AboutMeController@index');
	Route::put('/about-me', 'Admin\AboutMeController@update');

	Route::get('/messages', 'MessageController@index');
	Route::delete('/messages/{id}', 'MessageController@destroy');

	Route::resource('/gallery', 'Admin\GalleryController');

	Route::resource('/slider', 'Admin\SliderController');
});