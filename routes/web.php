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

//maps
Route::get('/maps', function () {
    return view('maps/maps');
});

Route::get('/maps-kenjeran', function () {
    return view('maps/maps2');
});

//booking
Route::get('/booking', function () {
    return view('booking/detailbooking');
});

Route::get('/detail-wisata', function () {
    return view('booking/detailwisata');
});

Route::get('/booking-schedule', function () {
    return view('booking/bookingschedule');
});


Route::get('/booking-invoice', function () {
    return view('booking/invoice');
});

//payment
Route::get('/payment-method', function () {
    return view('payment/payment');
});

Route::get('/qris', function () {
    return view('payment/qrisnya');
});

Route::get('/payment-success', function () {
    return view('payment/sukses');
});

Route::get('/ticket', function () {
    return view('payment/tiketmu');
});

//profile
Route::get('/profile', function () {
    return view('profile/account');
});

Route::get('/detail-profile', function () {
    return view('profile/detilaccount');
});

Route::get('/booking-list', function () {
    return view('profile/booksched');
});

Route::get('/profile-saved', function () {
    return view('profile/sukses');
});

// ADMIN WOY 
Route::get('/home-admin', function () {
    return view('admin/home-admin');
});

Route::get('/tambah-wisata', function () {
    return view('admin/tambah-wisata');
});

Route::get('/tambah-promo', function () {
    return view('admin/tambah-promo');
});

Route::get('/booking-schedule', function () {
    return view('admin/booking-schedule');
});

Route::get('/peta', function () {
    return view('admin/peta');
});

Route::get('/verifikasi', function () {
    return view('admin/verifikasi');
});

Route::get('/detil-wisata', function () {
    return view('admin/detil-wisata');
});

Route::get('/edit-detail-wisata', function () {
    return view('admin/edit-detail-wisata');
});

Route::get('/savebook', function () {
    return view('admin/savebook');
});

Route::get('/detail-booking', function () {
    return view('admin/detail-booking');
});

Route::get('/detil-pembeli-tiket', function () {
    return view('admin/detil-pembeli-tiket');
});

