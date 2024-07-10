<?php
namespace App\Http\Controllers;  
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('libro/listar', [BookController::class, 'listar'])->name('book.listar');
Route::get('libro/create', [BookController::class, 'create'])->name('book.create');
Route::post('libro/store', [BookController::class, 'store'])->name('book.store');
Route::get('libro/{book}', [BookController::class, 'show'])->name('book.show');
Route::put('libro/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('libro/{book}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('libro/{book}/edit', [BookController::class, 'edit'])->name('book.edit');

Route::get('ejemplarusuario/listar', [ExemplaryUserController::class, 'listar'])->name('exuser.listar');
Route::get('ejemplarusuario/asociar', [ExemplaryUserController::class, 'asociar'])->name('exuser.asociar');
Route::post('ejemplarusuario/store', [ExemplaryUserController::class, 'store'])->name('exuser.store');
