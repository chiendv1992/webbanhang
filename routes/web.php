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
        //	    dashboard
		Route::get('/dashboard',['as'=>'dashboard', 'uses'=>'DashboardController@index']);
//        category
		Route::group(['prefix'=>'category'], function()
			{
				Route::get('list',['as'=>'admin.category.list','uses'=>'CategoryController@index']);

				Route::get('create',['as'=>'admin.category.create','uses'=>'CategoryController@create']);
				Route::post('create',['as'=>'admin.category.store','uses'=>'CategoryController@store']);

				Route::get('edit/{id}',['as'=>'admin.category.edit','uses'=>'CategoryController@edit']);
				Route::post('edit/{id}',['as'=>'admin.category.update','uses'=>'CategoryController@update']);
				
				Route::get('delete/{id}',['as'=>'admin.category.destroy','uses'=>'CategoryController@destroy']);			
		});
//
        Route::group(['prefix'=>'product'], function()
        {
            Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@index']);

            Route::get('create',['as'=>'admin.product.create','uses'=>'ProductController@create']);
            Route::post('create',['as'=>'admin.product.store','uses'=>'ProductController@store']);

            Route::get('edit/{id}',['as'=>'admin.product.edit','uses'=>'ProductController@edit']);
            Route::post('edit/{id}',['as'=>'admin.product.update','uses'=>'ProductController@update']);

            Route::get('delete/{id}',['as'=>'admin.product.destroy','uses'=>'ProductController@destroy']);

            Route::get('show/{id}',['as'=>'admin.product.show','uses'=>'ProductController@show']);


        });
//    iamge product
		Route::group(['prefix'=>'image'], function()
        {


            Route::get('create',['as'=>'admin.image.create','uses'=>'ImageController@create']);
            Route::post('create',['as'=>'admin.image.store','uses'=>'ImageController@store']);

            Route::get('edit/{id}',['as'=>'admin.image.edit','uses'=>'ImageController@edit']);
            Route::post('edit/{id}',['as'=>'admin.image.update','uses'=>'ImageController@update']);

            Route::get('delete/{id}',['as'=>'admin.image.destroy','uses'=>'ImageController@destroy']);
        });
		//banner
		Route::group(['prefix'=>'banner'], function()
        {
            Route::get('list',['as'=>'admin.banner.list','uses'=>'BannerController@index']);

            Route::get('create',['as'=>'admin.banner.create','uses'=>'BannerController@create']);
            Route::post('create',['as'=>'admin.banner.store','uses'=>'BannerController@store']);

            Route::get('edit/{id}',['as'=>'admin.banner.edit','uses'=>'BannerController@edit']);
            Route::post('edit/{id}',['as'=>'admin.banner.update','uses'=>'BannerController@update']);

            Route::get('delete/{id}',['as'=>'admin.banner.destroy','uses'=>'BannerController@destroy']);
        });
		Route::group(['prefix'=>'order'], function()
        {
            Route::get('list',['as'=>'admin.order.list','uses'=>'OrderController@index']);

            Route::get('show/{id}',['as'=>'admin.order.edit','uses'=>'OrderController@show']);
            Route::post('show/{id}',['as'=>'admin.order.update','uses'=>'OrderController@update']);

            Route::get('delete/{id}',['as'=>'admin.order.destroy','uses'=>'OrderController@destroy']);
        });
	});

Route::get('/',['as'=>'index','uses'=>'FrontendController@index']);
Route::get('product/list/{id}',['as'=>'grid','uses'=>'FrontendController@grid']);
Route::get('detail/product/{id}',['as'=>'grid','uses'=>'FrontendController@detail']);

Route::get('purchase/{id}/{slug}',['as'=>'purchase','uses'=>'FrontendController@purchase']);

Route::get('contact',['as'=>'card','uses'=>'FrontendController@contact']);

Route::get('card',['as'=>'card','uses'=>'FrontendController@card']);
Route::post('card',['as'=>'card','uses'=>'FrontendController@postcard']);


Route::get('delete-card/{id}',['as'=>'deletecard','uses'=>'FrontendController@deletecard']);
Route::post('update-card/{id}',['as'=>'updatecart','uses'=>'FrontendController@updatecart']);
