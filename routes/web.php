<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PembelianController;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Route::get('login', [LoginController::class, 'loginBackend'])->name('login');
Route::post('login', [LoginController::class, 'authenticateBackend'])->name('login');
Route::post('logout', [LoginController::class, 'logoutBackend'])->name('logout');

Route::get('admin/beranda', [BerandaController::class, 'beranda'])->name('admin.beranda')->middleware('auth');
Route::get('product', [ProductController::class, 'index'])->name('product')->middleware('auth');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');

Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian')->middleware('auth');