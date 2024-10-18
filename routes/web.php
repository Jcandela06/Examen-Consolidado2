<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas.index');
Route::post('/artistas', [ArtistaController::class, 'store'])->name('artistas.store');
Route::get('/artistas/create', [ArtistaController::class, 'create'])->name('artistas.create');
Route::delete('/artistas/{artista}', [ArtistaController::class, 'destroy'])->name('artistas.destroy');
Route::put('/artistas/{artista}', [ArtistaController::class, 'update'])->name('artistas.update');
Route::get('/artistas/{artista}/edit', [ArtistaController::class, 'edit'])->name('artistas.edit');

});
