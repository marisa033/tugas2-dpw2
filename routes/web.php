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
    return view('index');
});

Route::get('/fashion', function () {
    return view('fashion');
});

Route::get('/electronic', function () {
    return view('electronic');
});

Route::get('/jewellery', function () {
    return view('jewellery');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/detail', function () {
    return view('detail');
});