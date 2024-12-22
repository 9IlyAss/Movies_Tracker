<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Movies', [MoviesController::class, 'index'])->name('Movies.index');
Route::get('/Movies/create', [MoviesController::class, 'create'])->name('Movies.create');
Route::post('/Movies', [MoviesController::class, 'store'])->name('Movies.store');
Route::get('/Movies/{id}/edit', [MoviesController::class, 'edit'])->name('Movies.edit');
Route::put('/Movies/{id}', [MoviesController::class, 'update'])->name('Movies.update');
Route::delete('/Movies/{id}', [MoviesController::class, 'destroy'])->name('Movies.destroy');

