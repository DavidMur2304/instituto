<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

// --------------------
// Páginas públicas
// --------------------
Route::view('/', 'main')->name('main');
Route::view('about', 'about');
Route::view('contactar', 'contactar');
Route::view('noticias', 'noticias');

// --------------------
// Cambio de idioma
// --------------------
Route::get('/lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
})->name('lang.switch');

// --------------------
// CRUD alumnos
// --------------------
Route::resource('alumnos', AlumnoController::class);

Route::get('/alumnos/{id}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{id}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

// --------------------
// Dashboard y perfil
// --------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --------------------
require __DIR__.'/auth.php';
