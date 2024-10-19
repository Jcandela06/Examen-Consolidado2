<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\Obra_de_arteController;
use App\Http\Controllers\ExposicionController;


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

//RUTAS ARTISTAS

Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas.index');
Route::post('/artistas', [ArtistaController::class, 'store'])->name('artistas.store');
Route::get('/artistas/create', [ArtistaController::class, 'create'])->name('artistas.create');
Route::delete('/artistas/{artista}', [ArtistaController::class, 'destroy'])->name('artistas.destroy');
Route::put('/artistas/{artista}', [ArtistaController::class, 'update'])->name('artistas.update');
Route::get('/artistas/{artista}/edit', [ArtistaController::class, 'edit'])->name('artistas.edit');

//RUTAS OBRAS DE ARTE

Route::get('/obras_de_arte', [Obra_de_arteController::class, 'index'])->name('obras_de_arte.index');
Route::post('/obras_de_arte', [Obra_de_arteController::class, 'store'])->name('obras_de_arte.store');
Route::get('/obras_de_arte/create', [Obra_de_arteController::class, 'create'])->name('obras_de_arte.create');
Route::delete('/obras_de_arte/{obra_de_arte}', [Obra_de_arteController::class, 'destroy'])->name('obras_de_arte.destroy');
Route::put('/obras_de_arte/{obra_de_arte}', [Obra_de_arteController::class, 'update'])->name('obras_de_arte.update');
Route::get('/obras_de_arte/{obra_de_arte}/edit', [Obra_de_arteController::class, 'edit'])->name('obras_de_arte.edit');

//RUTAS EXPOSICIONES

Route::get('/exposiciones', [ExposicionController::class, 'index'])->name('exposiciones.index');
Route::post('/exposiciones', [ExposicionController::class, 'store'])->name('exposiciones.store');
Route::get('/exposiciones/create', [ExposicionController::class, 'create'])->name('exposiciones.create');
Route::delete('/exposiciones/{exposicion}', [ExposicionController::class, 'destroy'])->name('exposiciones.destroy');
Route::put('/exposiciones/{exposicion}', [ExposicionController::class, 'update'])->name('exposiciones.update');
Route::get('/exposiciones/{exposicion}/edit', [ExposicionController::class, 'edit'])->name('exposiciones.edit');

});
