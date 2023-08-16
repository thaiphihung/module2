<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/', [StoreController::class, 'index'])->name('books.index');
Route::get('/create', [StoreController::class, 'create'])->name('books.create');
Route::post('/store', [StoreController::class, 'store'])->name('books.store');
Route::get('/show/{id}', [StoreController::class, 'show'])->name('books.show');
Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('books.edit');
Route::put('/update/{id}', [StoreController::class, 'update'])->name('books.update');
Route::delete('/destroy/{id}', [StoreController::class, 'destroy'])->name('books.destroy');
Route::get('/search', [StoreController::class, 'search'])->name('books.search');