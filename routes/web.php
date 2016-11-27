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



// Blog Routes
Route::resource('blog', 'BlogController');

//Product Route
Route::resource('product', 'ProductController');

//Cart

Route::get('/add-to-cart/{id}', ['uses' => 'ProductController@getAddToCart', 'as' => 'product.addToCart']);

Route::get('/add-to-cartC/{id}', ['uses' => 'ProductController@getAddToCartC', 'as' => 'product.addToCartC']);

Route::get('/reduceC/{id}', ['uses' => 'ProductController@getReduceByOneC', 'as' => 'product.reduceByOneC']);

Route::get('/remove/{id}', ['uses' => 'ProductController@getRemoveItem', 'as' => 'product.remove']);

Route::get('/shopping-cart', ['uses' => 'ProductController@getCart', 'as' => 'product.shoppingCart']);

//Pages
Route::get('/', ['uses' => 'PagesController@getIndex', 'as' => 'pages.index']);
// Route::get('/single/{id}', ['uses' => 'PagesController@getSingle', 'as' => 'pages.single']);

Route::get('p/{slug}', ['uses' => 'PagesController@getSingleProduct', 'as' => 'blog.single'])->where('slug', '[\w\d\-\_]+');

//Admin Panel
Route::get('/adminpanel', 'AdminpanelController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');
