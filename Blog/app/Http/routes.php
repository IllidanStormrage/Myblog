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

Route::get('/', 'WelcomeController@index');
Route::get('blog','BlogController@index') ;
Route::get('home', 'HomeController@index');
Route::group(['prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => 'auth'],function(){
    Route::get('/' , 'AdminHomeController@index') ;
    Route::resource('pages', 'PagesController');
    //此处应该在添加一个用来管理评论的
}) ;
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('AboutMe' , 'AboutMeController@index') ;
Route::get('Archive/{id}' , 'ArchiveController@show') ;