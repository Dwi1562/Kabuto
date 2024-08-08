<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::get('/template', function() {
    return view('template');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/registrasi', function() {
    return view('register');
});

Route::resource('/products', ProductController::class);

Route::resource('/categories', CategoryController::class);

Route::get('/transaksi', function() {
    return view('transaksi');
});

Route::resource('/users', UserController::class);