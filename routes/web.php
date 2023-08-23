<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Menu routes
Route::get('/about', function () {
    return view('frontend.menu.about');
});
Route::get('/contact', function () {
    return view('frontend.menu.contact');
});
Route::get('/checkout', function () {
    return view('frontend.order.checkout');
});
Route::get('/cart', function () {
    return view('frontend.cart.cart');
});










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







