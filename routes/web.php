<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/modul', [HomeController::class, 'index'])->name('modul');
Route::get('/role', [HomeController::class, 'index'])->name('role');

Route::prefix('auth')->group(function () {
    Route::view('/login', 'pages.auth.login')->name('login');
});


Route::prefix('template')->group(function () {
    Route::view('/', 'index');
    Route::view('/buttons', 'buttons');
    Route::view('/cards', 'cards');
    Route::view('/charts', 'charts');
    Route::view('/forms', 'forms');
    Route::view('/modals', 'modals');
    Route::view('/tables', 'tables');
});
