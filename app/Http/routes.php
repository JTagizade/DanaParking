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



Route::get('/' , 'DanaController@index');  // Homepage

Route::get('/register' , 'DanaController@register');  //Registration page

Route::post('store','DanaController@store');  

Route::get('/showall' , 'DanaController@showAll');  // Show all users

Route::get('/post' , 'ContentController@showall');

Route::get('delete/{id}','DanaController@destroy');

Route::get('edit/{id}', 'DanaController@edit');

Route::post('update/{id}', 'DanaController@update');














Route::auth();

Route::get('/home', 'HomeController@index');
