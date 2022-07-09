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

Route::get('/', function () {
    return view('home.index');
});

Route::get('shop/single/product/width', function(){
    return view('shop.single-product-fullwidth');
});
Route::get('shop', function(){
    return view('shop.shop');
});
Route::get('shop/compare' , function(){
    return view('shop.compare');
});
Route::get('shop/wishlist', function(){
    return view('shop.wishlist');
});
Route::get('about-us', function(){
    return view('home.about');
});
Route::get('contact-us', function(){
   return view('home.contact-us');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
