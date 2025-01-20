<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RequestController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('index');

Route::middleware(['auth'])->group(function () {
    Route::get('/share', [ItemController::class, 'create'])->name('items.create');
    Route::post('/share', [ItemController::class, 'store'])->name('items.store');

    Route::get('/request', [RequestController::class, 'index'])->name('requests.index');
    Route::post('/request', [RequestController::class, 'store'])->name('requests.store');
});
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

Route::get('/requests', [RequestController::class, 'index'])->name('requests.index');
Route::post('/requests', [RequestController::class, 'store'])->name('requests.store');
Route::get('/requests/{id}', [RequestController::class, 'show'])->name('requests.show');
