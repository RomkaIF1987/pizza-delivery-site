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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('pizza', 'PizzaController');

Route::get('add-to-cart/{id}', 'CartController@getAddToCart')->name('addToCart');
Route::get('cart-show', 'CartController@getCart')->name('cartShow');
Route::get('cart-confirm', 'CartController@getCartConfirm')->name('cartConfirm');