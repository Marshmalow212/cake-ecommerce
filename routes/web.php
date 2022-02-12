<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShopController;

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

Route::get('/',[ShopController::class,'homepage']);

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

Route::get('/admin',function(){
    return view('backend.home');
});

Route::get('/table',function(){
    return view('backend.table');
});

Route::resource('sliders',SliderController::class);
Route::resource('products',ProductsController::class);
Route::resource('categories',CategoryController::class);





