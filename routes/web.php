<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
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
Route::get('/genre/{genre}', [MovieController::class, 'index'])->name('genre');
Route::post('/find/', [MovieController::class, 'index'])->name('find');
Route::get('/categories/', [GenreController::class, 'index'])->name('categories');

require __DIR__.'/auth.php';
