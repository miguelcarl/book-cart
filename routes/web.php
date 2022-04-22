<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', [BooksController::class, 'index']);
Route::post('/register-user', [BooksController::class, 'saveCompleteName']);
Route::get('/select-books', [BooksController::class, 'listBooks']);
Route::post('/reserve-books', [BooksController::class, 'reserveBooks']);
Route::get('/thank-you', [BooksController::class, 'showThankYouPage']);