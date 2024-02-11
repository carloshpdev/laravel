<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('index');
});


//Routes related to book logic
Route::get('/books', [BookController::class, 'getBooks'])->name('books.getBooks');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

//Authors Routes
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');


//Rental Routes
Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');
Route::get('/rentals/create', [RentalController::class, 'create'])->name('rentals.create');
Route::post('/rentals/store', [RentalController::class, 'store'])->name('rentals.store');
Route::get('/rentals/{rental}/edit', [RentalController::class, 'edit'])->name('rentals.edit');
Route::put('/rentals/{rental}', [RentalController::class, 'update'])->name('rentals.update');
Route::delete('/rentals/{rental}', [RentalController::class, 'destroy'])->name('rentals.destroy');


//Users routes

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');



//Login route
Route::get('login', [LoginController::class, 'showLoginFormView'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.submit');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});
