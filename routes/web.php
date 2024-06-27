<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ItemController;

// Menampilkan semua item (sebagai dashboard)
Route::get('dashboard', [ItemController::class, 'index'])->middleware('auth')->name('dashboard');

// Menampilkan form untuk membuat item baru
Route::get('/items/create', [ItemController::class, 'create'])->name('create');

// Menyimpan item baru ke database
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

// Menampilkan form untuk mengedit item
Route::get('/{item}/edit', [ItemController::class, 'edit'])->name('edit');

// Mengupdate item di database
Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');

// Menghapus item dari database
Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

// Route untuk register, login, dan logout
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman login
Route::get('/', function () {
    return view('login');
});
