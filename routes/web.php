<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/books', [BooksController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.books');
Route::post('/books', [BooksController::class, 'store'])->middleware(['auth', 'verified'])->name('register.books');
Route::get('/books/{id}/edit',[BooksController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit.books');
Route::put('/books/{id}', [BooksController::class, 'update'])->middleware(['auth', 'verified'])->name('put.books');
Route::delete('/books/{id}', [BooksController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete.books');
Route::get('/books/show',[BooksController::class, 'show'])->middleware(['auth', 'verified'])->name('show.books');
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
