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
Route::get('about', 'HomeController@about')->name('homeAbout');
Route::get('blog', 'HomeController@blog')->name('homeBlog');
Route::get('blog-single', 'HomeController@blogSingle')->name('homeBlogSingle');
Route::get('contact', 'HomeController@contact')->name('homeContact');
Route::get('menu', 'HomeController@menu')->name('homeMenu');
Route::get('services', 'HomeController@services')->name('homeServices');

Route::resource('users', 'UserController');

Route::resource('pizza', 'PizzaController')->middleware('role:admin');

Route::get('add-to-cart/{id}', 'CartController@getAddToCart')->name('addToCart');
Route::get('cart-show', 'CartController@getCart')->name('cartShow');
Route::get('cart-confirm/{order}', 'CartController@getCartConfirm')->name('cartConfirm');
Route::get('reduce/{id}', 'CartController@getReduceByOne')->name('reduceByOneCart');
Route::get('remove/{id}', 'CartController@getRemoveItem')->name('removeItemCart');

Route::resource('orders', 'OrderController');

Route::get('admin', 'AdminController@index')->name('adminPanelIndex')->middleware('role:admin');;
Route::get('/adminEditUser/{user}', 'AdminController@userEdit')->name('adminEditUser')->middleware('role:admin');;
