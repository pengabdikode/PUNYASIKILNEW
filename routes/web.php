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
require 'admin.php';

//verify
Auth::routes();
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.verify');


Route::view('/about-us', 'site.pages.aboutus');


Route::view('/homepage', 'site.pages.homepage');

Route::view('/checkout', 'site.pages.checkout');

Route::view('/', 'site.partials.header2');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/products/{slug}', 'Site\ProductController@show')->name('product.show');
Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');


//cart
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

//checkout
Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
});

//Search
Route::get('/search', 'SearchController@search')->name('search');


//payment
Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');

//order user
Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');

//contact us
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactSaveData']);


