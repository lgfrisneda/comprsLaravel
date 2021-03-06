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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::group(['middleware' => ['role:Administrador']], function () {
        Route::get('/users', 'UserController@index')->name('usuarios');
        Route::get('/orders', 'OrderController@index')->name('ordenes');
        Route::get('/products', 'ProductController@index')->name('productos');
        Route::get('/addresses/{user_id}', 'AddressController@index')->name('direcciones');
    });

    Route::group(['middleware' => ['role:Cliente']], function () {
        Route::get('/mydata', 'ClientController@data')->name('misdatos');
        Route::get('/myaddress', 'ClientController@address')->name('misdirecciones');
        Route::get('/myorders', 'ClientController@order')->name('misordenes');
    });

    Route::get('third', 'ThirdController@index');

});