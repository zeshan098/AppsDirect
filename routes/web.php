<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', 'Home@show')->name('home');
Route::get('/order', 'OrderController@show')->name('order');
Route::post('/order/store', 'OrderController@store')->name('store')->middleware("auth");
Route::get('/checkout/{id}', 'Checkout@show')->name('checkout');
Route::get('/profile', 'Profile@show')->name('profile');

Route::get('stripe/{id}', 'StripePaymentController@stripe')->name('stripe')->middleware("auth");
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post')->middleware("auth");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    // Route::post('/products', 'Product@create')->name('create');
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'Home@show')->name('home');

Route::get('/user_message', 'User_Messages@show')->name('user_message')->middleware("auth");
Route::post('/user_reply', 'User_Messages@user_reply')->name('user_reply')->middleware("auth");

Route::post('/update_status', 'User_Messages@update_status')->name('update_status');   
Route::post('admin/admin_reply/{id}', 'User_Messages@admin_reply')->name('admin_reply');
