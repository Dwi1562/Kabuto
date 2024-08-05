<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/user', function () {
    $data = [
        'content'  => 'admin.user.index'
    ];
    return view('admin.layouts.wrapper', $data);
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

Route::get('/kategori', function() {
    return view('kategori');
});

Route::get('/transaksi', function() {
    return view('transaksi');
});