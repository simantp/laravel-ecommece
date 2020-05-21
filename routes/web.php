<?php

use Illuminate\Support\Facades\Route;


//Route::redirect('/', '/home');

Auth::routes();

//Home Page
Route::get('/', 'HomeController@index')->name('home');

//Website Pages
//Route::get('/contact', 'HomeController@contact')->name('contact');

//Products Page
Route::get('/products', 'ProductController@index')->name('products.index');
//Route::get('/products/search', 'ProductController@search')->name('products.search');

// single product page
Route::get('/products/{product}', 'ProductController@single')->name('product.single');

//Cart Controllers
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::get('/order-complete', 'CartController@ordercomplete')->name('cart.order-complete')->middleware('auth');

//Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon')->middleware('auth');

//Order Controllers
Route::resource('orders', 'OrderController')->middleware('auth');

//Paypal Controllers
Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');

//Voyeger Admin 
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
