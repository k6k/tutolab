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

//Route::get('/hello/{name}', 'WelcomeController@index');
Route::get('/', 'WelcomeController@index');

/*Route::get('link/create/','linksController@create');
Route::get('r/{id}','linksController@show')->where('id','[0-9]+');
Route::post('link/create/','linksController@store');*/

Route::resource('link','linksController',['only'=>['create','store']]);//Structure Rest
Route::get('r/{link}',['as' =>'link.show','uses'=>'linksController@show'])->where('link','[0-9]+');



Route::controller('welcome','WelcomeController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);/**/

