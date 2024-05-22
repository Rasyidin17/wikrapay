<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PenjualanController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('layouts.master');
});

Route::resource('barang', BarangController::class);
Route::resource('penjualan', PenjualanController::class);
Route::resource('pemasok', PemasokController::class);