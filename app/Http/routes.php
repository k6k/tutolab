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

Route::get('home', 'HomeController@index');


//Toutes les routes préfixées par admin/
Route::group(['prefix'=>'admin','middleware'=>'ip'],function(){
	Route::get('flo',function(){
	return 'Salut Flo';
	});
});

//Route::get('a-propos','PagesController@about');
Route::get('a-propos',['as' =>'about','uses'=>'PagesController@about']);

Route::get('salut/{slug}-{id}',['as'=>'salut',function($slug,$id){
		//return "Lien : /salut/$slug-$id";
		return "Lien : ".route('salut',['slug'=>$slug,'id'=>$id]);
}])->where('slug','[a-z0-9\-]+')->where('id','[0-9]+');

Route::controller('welcome','WelcomeController');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

