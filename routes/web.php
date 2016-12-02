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

Route::get('checkout', ['uses' => 'PagesController@getCheckout', 'as' => 'product.checkout']);

Route::post('coupon', ['uses' => 'PagesController@getCoupon', 'as' => 'product.coupon']);

Route::get('p/{slug}', ['uses' => 'PagesController@getSingleProduct', 'as' => 'blog.single'])->where('slug', '[\w\d\-\_]+');
Route::get('b/{slug}', ['uses' => 'PagesController@getSingleBlog', 'as' => 'sBlog.single'])->where('slug', '[\w\d\-\_]+');

//Comments
Route::post('comments/{blog_id}', ['uses' =>'CommentController@store', 'as' => 'comments.store']);
Route::put('comments/{id}', ['uses' =>'CommentController@update', 'as' => 'comment.update']);
Route::delete('destroy/{id}', ['uses' =>'CommentController@destroy', 'as' => 'comment.destroy']);
Route::get('comment', ['uses' =>'CommentController@index', 'as' => 'comments.index']);

//Categories
Route::resource('categories', 'CategoryController', ['except' => 'create']);

Route::resource('coupons', 'CouponController');

//Admin Panel
Route::get('/adminpanel','AdminpanelController@getIndex');

Auth::routes();

Route::get('/home','HomeController@index');
Route::get('/customerregistration', 'PagesController@custregister');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/customer_home', 'CustomerController@index');

Auth::routes();
Route::get('customer_login','CustomerAuth\LoginController@showLoginForm');
Route::post('customer_login','CustomerAuth\LoginController@login');
Route::get('customer_logout','CustomerAuth\LoginController@logout');
Route::get('customer_password/email','CustomerAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('customer_password/reset','CustomerAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('customer_password/reset','CustomerAuth\ResetPasswordController@reset');
Route::get('customer_password/reset/{token}','CustomerAuth\ForgotPasswordController@showResetForm');
Route::get('customer_register','CustomerAuth\RegisterController@showRegisterForm');
Route::post('customer_register','CustomerAuth\RegisterController@register');

