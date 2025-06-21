<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::prefix('template')->group(function () {
    Route::view('/', 'index');
    Route::view('/buttons', 'buttons');
    Route::view('/cards', 'cards');
    Route::view('/charts', 'charts');
    Route::view('/forms', 'forms');
    Route::view('/modals', 'modals');
    Route::view('/tables', 'tables');
});
