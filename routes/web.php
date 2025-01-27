<?php
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\CatasController;
use App\Http\Controllers\ResenaController; // Agregar ResenaController
use App\Http\Controllers\AdminController; // Agregar AdminController
use App\Http\Controllers\ReservaController; // Agregar ReservaController

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

// Ruta que lleva a 'tarifaschek.blade.php'
Route::get('/tarifaschek', function () {
    return view('tarifaschek');
});

// Ruta que lleva a 'cursos.blade.php'
Route::get('/cursos', function () {
    return view('cursos');
});

// Ruta que lleva a 'contacto.blade.php'
Route::get('/contacto', function () {
    return view('contacto');
});

// Ruta que lleva a 'resenas.blade.php'
Route::get('/resenas', [ResenaController::class, 'index'])->name('resenas.index');

// Ruta para enviar reseñas
Route::post('/resenas', [ResenaController::class, 'store'])->name('resenas.store');

// Ruta para editar reseñas
Route::get('/resenas/{id}/edit', [ResenaController::class, 'edit'])->name('resenas.edit');

// Ruta para actualizar reseñas
Route::put('/resenas/{id}', [ResenaController::class, 'update'])->name('resenas.update');

// Página de Contacto
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [UserRequestController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/courses', [AdminCourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [AdminCourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [AdminCourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{id}/edit', [AdminCourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{id}', [AdminCourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{id}', [AdminCourseController::class, 'destroy'])->name('courses.destroy');
    Route::get('/form', [AdminController::class, 'showForm'])->name('form');
    Route::post('/form', [AdminController::class, 'submitForm'])->name('form.submit');
});

// Ruta que lleva a 'catasdevino.blade.php'
Route::get('/catasdevino', [CatasController::class, 'index'])->name('catas.index');

// Ruta que lleva a 'cursosdevino.blade.php'
Route::get('/cursosdevino', function () {
    return view('cursosdevino');
});

// Ruta que lleva a 'info.blade.php'
Route::get('/info', function () {
    return view('info');
});

Route::get('/cata/{id}', [CatasController::class, 'show'])->name('cata.show');

Route::delete('/catas/{id}', [CatasController::class, 'destroy'])->name('catas.destroy'); // Ruta para eliminar catas

Route::get('/reservar/{id}', [ReservaController::class, 'showForm'])->name('reservar.form');
Route::post('/reservar/{id}', [ReservaController::class, 'submitForm'])->name('reservar.submit');
Route::get('/personasReserv/{id}', [ReservaController::class, 'list'])->name('personasReserv.list'); // Ruta para ver personas apuntadas
Route::delete('/reservas/{id}', [ReservaController::class, 'destroy'])->name('reservas.destroy'); // Ruta para eliminar reserva

require __DIR__.'/auth.php';
