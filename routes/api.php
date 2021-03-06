<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {

    Route::group(['middleware' => ['role:Administrador']], function () {
        Route::get('users', 'Api\AdminController@user');
        Route::get('orders', 'Api\AdminController@order');
        Route::get('products', 'Api\AdminController@product');
    });

    Route::group(['middleware' => ['role:Cliente']], function () {
        Route::get('mydata', 'Api\ClientController@data');
        Route::get('myaddresses', 'Api\ClientController@address');
        Route::get('myorders', 'Api\ClientController@order');
    });

    Route::get('posts', 'Api\PostController@index');

    Route::get('logout', 'Api\AuthController@logout');
});