<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/books/{slug}',[BookController::class, 'show'])->name('books.show');
Route::get('/books/detail/{slug}', [BookController::class, 'detail'])->name('books.detail');
Route::get('/books/digital/{slug}', [BookController::class, 'digital'])->name('books.digital');

Route::view('/signin', 'login.signin');
Route::view('/signup', 'login.signup');






