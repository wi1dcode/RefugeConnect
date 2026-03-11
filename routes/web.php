<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animals')->controller(AnimalController::class)->group(function () {
    Route::get('/seed', 'seed')->name('animals.seed');
    Route::get('/create', 'create')->name('animals.create');
    Route::get('/update/{id}', 'update')->name('animals.update');
    Route::get('/delete/{id}', 'delete')->name('animals.delete');
    Route::get('/{id}', 'show')->name('animals.show');
});

Route::fallback(function () {
    return response()->view('errors.not-found', [], 404);
});