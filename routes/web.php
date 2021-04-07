<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/title/{id}', [MovieController::class, 'show'])->name('movie');
Route::get('/genre/{genre}', [MovieController::class, 'index'])->name('genre');
Route::get('/find/{title}', [MovieController::class, 'index'])->name('find');
Route::get('/categories/', [GenreController::class, 'index'])->name('categories');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';
