<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/{id}', [ActorsController::class, 'show'])->name('actors.show');

Route::get('/actors/page/{movie}', [ActorsController::class, 'show']);

Route::get('/tv', 'TvController@index')->name('tv.index');
Route::get('/tv/{id}', 'TvController@show')->name('tv.show');

// Route::get('/actors', 'ActorsController@index')->name('actors.index');
// Route::get('/actors/page/{page?}', 'ActorsController@index');

// Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');