<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/film/{id}', [PublicController::class, 'show'])->name('dettaglio-film');
Route::get('/film/genre/{genre}', [PublicController::class, 'filterMovieByGenre'])->name('genere-film');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'contactSubmit'])->name('contact-submit');
Route::get('/travel', [ContactController::class, 'travel'])->name('travel');
Route::post('/travel/submit', [ContactController::class, 'travelSubmit'])->name('travel.submit');