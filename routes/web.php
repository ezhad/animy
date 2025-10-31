<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'home']);

Route::get('/genre', [PagesController::class, 'genre']);

Route::get('/series', [SeriesController::class, 'index']);

Route::get('/series/{id}', [SeriesController::class, 'show']);

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/movies/{id}', [MovieController::class, 'show']);

Route::get('/age', [PagesController::class, 'age']);
