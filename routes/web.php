<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PersonController;


Route::get('/opportunity', function () {
    return view('opportunity', [
        'firstname' => 'Hans',
        'lastname' => 'Muster',
        'birthdate' => '01.01.1955'
    ]);
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::get('/people', [PersonController::class, 'index']);
Route::get('/people/{id}', [PersonController::class, 'show']);
Route::post('/movies/store', [MovieController::class, 'store'])->name('movies.store');
