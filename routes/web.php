<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TvController;
use App\Http\Controllers\TvDetailController;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieDetailController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);

Route::get('/movies/popular', [MovieController::class, 'indexpopular'])->name('movies.popular');
Route::get('/movies/nowplaying', [MovieController::class, 'indexnowplaying'])->name('movies.nowplaying');
Route::get('/movies/toprated', [MovieController::class, 'indextoprated'])->name('movies.toprated');
Route::get('/movies/upcoming', [MovieController::class, 'indexupcoming'])->name('movies.upcoming');
Route::get('/movie/{id}', [MovieDetailController::class, 'show'])->name('movie.show');

Route::get('/tv/popular', [TvController::class, 'indexpopular'])->name('tv.popular');
Route::get('/tv/ontheair', [TvController::class, 'indexontv'])->name('tv.ontv');
Route::get('/tv/toprated', [TvController::class, 'indextoprated'])->name('tv.toprated');
Route::get('/tv/airingtoday', [TvController::class, 'indexairingtoday'])->name('tv.airingtoday');
Route::get('/tv/{id}/season/{seasonNumber}', [TvDetailController::class, 'show'])->name('tv.show');


// Route::get('/502', [App\Http\Controllers\ErrorController::class, 'index502']);
// Route::get('/movie/{slug}', [App\Http\Controllers\DetailMovieController::class, 'index'])->name('movie.index');

