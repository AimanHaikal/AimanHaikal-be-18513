<?php
// routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index']);
    Route::get('/show/{id}', [MovieController::class, 'show']);
    Route::post('/', [MovieController::class, 'store']);
    Route::put('/update/{id}', [MovieController::class, 'update']);
    Route::delete('/destroy/{id}', [MovieController::class, 'destroy']);
    Route::get('/genre/{genre}', [MovieController::class, 'getMoviesByGenre']);
    Route::get('/timeslot', [MovieController::class, 'getMoviesByTimeslot']);
    Route::get('/theater-movies', [MovieController::class, 'getMoviesByTheaterAndDate']);
    Route::get('/performer-movies', [MovieController::class, 'getMoviesByPerformer']);
});
