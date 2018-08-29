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
Route::get('backend/auth/login',['as'=>'login', 'uses'=>'Auth\LoginController@getLogin']);
Route::post('backend/auth/login',['as'=>'auth.login', 'uses'=>'Auth\LoginController@postLogin']);
			
Route::group(['prefix'=>'backend'], function()
{			
	Route::get('register',['as'=>'auth.register','uses'=>'Auth\RegisterController@index']);
	Route::post('register',['as'=>'auth.register','uses'=>'Auth\RegisterController@store']);
			
});

Route::get('/logout',['as'=>'getLogout', 'uses'=>'Auth\LoginController@getLogout']);

Route::group(['middleware'=>'auth'], function()
	{
		Route::get('/dashboard',['as'=>'dashboard', 'uses'=>'DashboardController@index']);

		Route::group(['prefix'=>'category'], function()
			{
				Route::get('list',['as'=>'admin.category.list','uses'=>'CategoryController@index']);

				Route::get('create',['as'=>'admin.category.create','uses'=>'CategoryController@create']);
				Route::post('create',['as'=>'admin.category.store','uses'=>'CategoryController@store']);

				Route::get('edit/{id}',['as'=>'admin.category.edit','uses'=>'CategoryController@edit']);
				Route::post('edit/{id}',['as'=>'admin.category.update','uses'=>'CategoryController@update']);
				
				Route::get('delete/{id}',['as'=>'admin.category.destroy','uses'=>'CategoryController@destroy']);			
		});
	});
