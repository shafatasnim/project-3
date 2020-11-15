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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/shop', function () {
    return view('shop');
});


Route::get('/galery', function () {
    return view('gallery');
});

Route::get('/detail', function () {
    return view('shop-detail');
});



Route::get('/contact', function () {
    return view('contact-us');
});








Route::get('/template', function () {
    return view('template.base');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/kategori', function () {
    return view('kategori');
});


Route::get('/promo', function () {
    return view('promo');
});



