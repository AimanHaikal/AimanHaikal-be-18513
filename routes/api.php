<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index']);
    Route::get('/{id}', [MovieController::class, 'show']);
    Route::post('/', [MovieController::class, 'store']);
    Route::put('/{id}', [MovieController::class, 'update']);
    Route::delete('/{id}', [MovieController::class, 'destroy']);
    Route::get('/genre/{genre}', [MovieController::class, 'getMoviesByGenre']);
    Route::get('/timeslot', [MovieController::class, 'getMoviesByTimeslot']);
});
