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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/categories/{slug}/{id}', [
    'as' => 'categories.product',
    'uses' => 'CategoryController@index',
]);
Route::get('/products', [
    'as' => 'products',
    'uses' => 'HomeController@show'
]);
// Search Products
Route::get('/search', 'SearchController@getSearch')->name('search');

//Detail Product
Route::get('/detail-products/{product}', 'DetailProductController@show')->name('detail');

//Cart
Route::get('/cart-increment', 'CartController@incrementCart');
Route::get('/cart-decrease', 'CartController@decreaseCart');
Route::get('/cart/{product}', 'CartController@addToCart')->name('cart');
Route::get('/cart-show', 'CartController@showCart');
Route::get('/remove/{id}', 'CartController@remove')->name('remove.item');

//Checkout
Route::get('/checkout', 'CartController@getCheckOut');
Route::post('/checkout', 'CartController@postCheckOut');
