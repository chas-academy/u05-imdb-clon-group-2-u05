<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\ReviewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/title/{id}', [MovieController::class, 'show'])->name('movie');
Route::get('/title/{id}/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/genre/{genre}', [MovieController::class, 'index'])->name('genre');
Route::post('/find/', [MovieController::class, 'index'])->name('find');
Route::get('/categories/', [GenreController::class, 'index'])->name('categories');
Route::get('/watchlist/', [WatchlistController::class, 'show'])->name('watchlist')->middleware('auth');
Route::post('/watchlist/add/{id}', [WatchlistController::class, 'addMovie'])->name('watchlist-add')->middleware('auth');
Route::post('/watchlist/remove/{id}', [WatchlistController::class, 'removeMovie'])->name('watchlist-remove')->middleware('auth');
Route::post('/review/add', [ReviewController::class, 'store'])->name('add-review')->middleware('auth');

require __DIR__.'/auth.php';
