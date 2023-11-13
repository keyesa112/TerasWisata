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

//auth
Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('auth/login');
});


Route::get('/signup', function () {
    return view('auth/signup');
});

// home
Route::get('/home', function () {
    return view('home/home');
});

Route::get('/detail-promo', function () {
    return view('home/detailpromo');
});

Route::get('/more-promo', function () {
    return view('home/showpromo');
});

//wishlist
Route::get('/wishlist', function () {
    return view('wishlist/wishlist');
});