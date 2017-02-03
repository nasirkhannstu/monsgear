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


                             //  Admin Panel //

Route::get('/adminpanel','AdminpanelController@getIndex');
// Blog Routes
Route::resource('adminpanel/blog', 'BlogController');

//Product Route

Route::resource('adminpanel/product', 'ProductController');
//Categories
Route::resource('adminpanel/categories', 'CategoryController', ['except' => 'create']);
//Coupon
Route::resource('adminpanel/coupons', 'CouponController');
//Order 
Route::resource('adminpanel/order', 'OrderController', ['except' => 'create']);
Route::get('/showorder/{id}', ['uses' => 'OrderController@getShowOrder', 'as' => 'pages.showorder']);
Route::post('addproduct/{prod_id}', ['uses' =>'OrderController@getAddprod', 'as' => 'product.add']);
Route::post('orderaction/{prod_id}',['uses' =>'OrderController@newAction', 'as'=>'coupon.newaction']);
Route::post('addstatus/{id}', ['uses' =>'OrderController@getAddstatus', 'as' => 'status.add']);
Route::post('addcoupon/{id}', ['uses' =>'OrderController@getAddcoupon', 'as' => 'coupon.add']);
Route::post('addquantity/{id}', ['uses' =>'OrderController@getAddquantity', 'as' => 'quantity.update']);
Route::post('updateaddress/{id}', ['uses' =>'OrderController@getAddaddress', 'as' => 'address.update']);
//Comments 
Route::post('comments/{blog_id}', ['uses' =>'CommentController@store', 'as' => 'comments.store']);
Route::put('comments/{id}', ['uses' =>'CommentController@update', 'as' => 'comment.update']);
Route::delete('destroy/{id}', ['uses' =>'CommentController@destroy', 'as' => 'comment.destroy']);
Route::get('comment', ['uses' =>'CommentController@index', 'as' => 'comments.index']);
//Pcomments
Route::post('pcomments/{product_id}', ['uses' =>'PcommentController@store', 'as' => 'pcomments.store']);
Route::put('pcomments/{id}', ['uses' =>'PcommentController@update', 'as' => 'pcomment.update']);
Route::delete('pdestroy/{id}', ['uses' =>'PcommentController@destroy', 'as' => 'pcomment.destroy']);
Route::get('pcomment', ['uses' =>'PcommentController@index', 'as' => 'pcomments.index']);



// //Cart

// Route::get('/add-to-cart/{id}', ['uses' => 'ProductController@getAddToCart', 'as' => 'product.addToCart']);

// Route::get('/add-to-cartC/{id}', ['uses' => 'ProductController@getAddToCartC', 'as' => 'product.addToCartC']);

// Route::get('/reduceC/{id}', ['uses' => 'ProductController@getReduceByOneC', 'as' => 'product.reduceByOneC']);

// Route::get('/remove/{id}', ['uses' => 'ProductController@getRemoveItem', 'as' => 'product.remove']);

// //Shopping Cart
// Route::get('/shopping-cart', ['uses' => 'PagesController@getShowCoupon', 'as' => 'product.shoppingCart']);
// //Route::get('showcoupon', ['uses' => 'PagesController@getShowCoupon', 'as' => 'product.showcoupon']);
// Route::post('coupon', ['uses' => 'PagesController@getCoupon', 'as' => 'product.coupon']);

// //Pages
// Route::get('/', ['uses' => 'PagesController@getIndex', 'as' => 'pages.index']);
// // Route::get('/single/{id}', ['uses' => 'PagesController@getSingle', 'as' => 'pages.single']);
// Route::get('checkout', ['uses' => 'PagesController@getCheckout', 'as' => 'product.checkout']);

// Route::get('p/{slug}', ['uses' => 'PagesController@getSingleProduct', 'as' => 'blog.single'])->where('slug', '[\w\d\-\_]+');
// Route::get('b/{slug}', ['uses' => 'PagesController@getSingleBlog', 'as' => 'sBlog.single'])->where('slug', '[\w\d\-\_]+');
// Route::get('allblogs', ['uses' => 'PagesController@getAllblog', 'as' => 'blog.all']);



						//   Home Routes   //
//Cart
Route::get('/add-to-cart/{id}',['uses'=>'ProductController@getAddToCart','as'=>'product.addToCart']);
Route::get('/add-to-cartC/{id}',['uses'=>'ProductController@getAddToCartC','as'=>'product.addToCartC']);
Route::get('/reduceC/{id}',['uses'=>'ProductController@getReduceByOneC','as'=>'product.reduceByOneC']);
Route::get('/remove/{id}', ['uses' => 'ProductController@getRemoveItem', 'as' => 'product.remove']);
//Shopping Cart
Route::get('/shopping-cart',['uses'=>'PagesController@getShowCoupon','as'=>'product.shoppingCart']);
//Route::get('showcoupon', ['uses' => 'PagesController@getShowCoupon', 'as' => 'product.showcoupon']);
Route::post('coupon',['uses'=>'PagesController@getCoupon','as'=>'product.coupon']);

//Pages
Route::get('/', ['uses' => 'PagesController@getIndex', 'as' => 'pages.index']);
// Route::get('/single/{id}', ['uses' => 'PagesController@getSingle', 'as' => 'pages.single']);
Route::get('checkout', ['uses' => 'PagesController@getCheckout', 'as' => 'product.checkout']);
Route::get('searchpage', ['uses' => 'PagesController@getSearchPage', 'as' => 'product.searchpage']);

Route::get('shop/{slug}', ['uses' => 'PagesController@getSingleProduct', 'as' => 'blog.single'])->where('slug', '[\w\d\-\_]+');

Route::get('blog/{slug}', ['uses' => 'PagesController@getSingleBlog', 'as' => 'sBlog.single'])->where('slug', '[\w\d\-\_]+');

Route::get('blog', ['uses' => 'PagesController@getAllblog', 'as' => 'blog.all']);



                              //  customer account route   //


Route::get('myaccount',['uses' =>'AccountController@showMyaccount','as'=>'account.index']);
Route::get('account/address',['uses'=>'AccountController@showAddress','as'=>'account.address']);
Route::post('account/saveaddress',['uses'=>'AccountController@save','as'=>'account.saveaddress']);
Route::get('account/showorder',['uses'=>'AccountController@showOrder','as'=>'account.showorder']);
Route::get('account/showproducts/{id}',['uses'=>'AccountController@showProducts','as'=>'account.showproducts']);

Auth::routes();

Route::get('/home','HomeController@index');
Route::get('/customerregistration', 'PagesController@custregister');
Route::get('/contact', 'PagesController@showContact');
Route::post('/contact', 'PagesController@postContact');
Route::get('/about', 'PagesController@showAbout');

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

//Customer Account
Route::get('myaccount', ['uses' =>'AccountController@showMyaccount', 'as' => 'account.index']);
Route::get('account/address', ['uses' =>'AccountController@showAddress', 'as' => 'account.address']);
Route::post('account/saveaddress', ['uses' =>'AccountController@save', 'as' => 'account.saveaddress']);
Route::get('account/showorder', ['uses' =>'AccountController@showOrder', 'as' => 'account.showorder']);
Route::get('account/showproducts/{id}', ['uses' =>'AccountController@showProducts', 'as' => 'account.showproducts']);

