<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;

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

// Route vers la page d'accueil (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/members', [MembersController::class, 'index'])->name('members');

Route::get('/games', [GamesController::class, 'index'])->name('games');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get("/news/{id}", [NewsController::class, 'show'])->name("news.show");

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
