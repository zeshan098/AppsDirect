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

Route::get('/', 'Home@show')->name('home');
Route::get('/order', 'Order@show')->name('order');
Route::get('/checkout', 'Checkout@show')->name('checkout');
Route::get('/profile', 'Profile@show')->name('profile');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
