<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/custom', function () {
    return view('custom');
});

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

// Ruta que lleva a 'tarifas.blade.php'
Route::get('/tarifas', function () {
    return view('tarifas');
});

// Ruta que lleva a 'tarifas.blade.php'
Route::get('/cursos', function () {
    return view('cursos');
});

// Ruta que lleva a 'contacto.blade.php'
Route::get('/contacto', function () {
    return view('contacto');
});

// Ruta que lleva a 'contacto.blade.php'
Route::get('/resenas', function () {
    return view('resenas');
});

// Ruta que lleva a 'contacto.blade.php'
Route::get('/catasdevino', function () {
    return view('catasdevino');
});

require __DIR__.'/auth.php';
