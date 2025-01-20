<?php
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;

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
Route::get('/resenas', function () {
    return view('resenas');
});

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
});

// Ruta que lleva a 'catasdevino.blade.php'
Route::get('/catasdevino', function () {
    return view('catasdevino');
});

// Ruta que lleva a 'tarifasbase.blade.php'
Route::get('/tarifasbase', function () {
    return view('tarifasbase');
});

// Ruta que lleva a 'tarifaspopular.blade.php'
Route::get('/tarifaspopular', function () {
    return view('tarifaspopular');
});

// Ruta que lleva a 'tarifasexterprise.blade.php'
Route::get('/tarifasexterprise', function () {
    return view('tarifasexterprise');
});

require __DIR__.'/auth.php';
