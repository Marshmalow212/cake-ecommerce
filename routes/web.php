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

Route::get('/master', function () {
    return view('components.master');
});

Route::get('/', function () {
    return view('elements.index');
});

Route::get('/shop', function () {
    return view('elements.shop');
});

Route::get('/signin', function () {
    return view('elements.signin');
});

Route::get('/signup', function () {
    return view('elements.signup');
});

Route::get('/shopdetail', function () {
    return view('elements.shop-detail');
});






