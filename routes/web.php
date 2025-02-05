<?php
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\CatasController;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CursoController;
 
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
Route::get('/tarifas', [CursoController::class, 'index'])->name('tarifas.index');
 
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
    Route::get('/panel', function () {
        return view('panel');
    })->name('panel');
    Route::get('/personas', [AdminController::class, 'showPersonasForm'])->name('personas.form');
    Route::get('/personas/list', [AdminController::class, 'listPersonas'])->name('personas.list');
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
 
Route::get('/reservar/{curso}', [CursoController::class, 'showReservationForm'])->name('reservar.form');
Route::post('/reservar/{curso}', [CursoController::class, 'submitReservation'])->name('reservar.submit');
Route::get('/personasReserv/{curso}', [CursoController::class, 'listReservations'])->name('personasReserv.list'); // Ruta para ver personas apuntadas
Route::delete('/reservas/{reserva}', [CursoController::class, 'destroyReservation'])->name('reservas.destroy'); // Ruta para eliminar reserva
 
Route::resource('resenas', ResenaController::class);
Route::resource('cursos', CursoController::class);

// Agregar endpoint AJAX para respuestas del ChatBot
Route::post('/chat-response', function(\Illuminate\Http\Request $request) {
    $message = strtolower($request->input('message', ''));
    $wineResponses = [
        "curso"  => "Nuestro programa profesional incluye:<br>• Certificación internacional<br>• 120 horas lectivas<br>• Acceso a bodegas asociadas<br>• Bolsa de trabajo<br><a href='/cursos' class='text-amber-700 font-medium mt-2 inline-block'>Ver detalles</a>",
        "cata"   => "Próximos eventos:<br>• Cata de vinos blancos<br>• Maridaje con quesos<br>• Vinos orgánicos<br><a href='/catas' class='text-amber-700 font-medium mt-2 inline-block'>Reservar plaza</a>",
        "reseña" => "Últimas publicaciones:<br>• Rioja Gran Reserva 2015<br>• Albariño Rías Baixas<br>• Priorat Blend<br><a href='/resenas' class='text-amber-700 font-medium mt-2 inline-block'>Ver análisis completo</a>",
        "precio" => "Nuestros planes:<br>• Curso completo: €599<br>• Bono 3 catas: €199<br>• Membresía anual: €299<br><a href='/tarifas' class='text-amber-700 font-medium mt-2 inline-block'>Ver todas las opciones</a>"
    ];
    $default = "Para más información sobre \"{$message}\", visita <a href='/contacto' class='text-amber-700'>nuestra página de contacto</a> o explora <a href='/faq' class='text-amber-700'>nuestro centro de ayuda</a>.";
    if (strpos($message, 'curso') !== false) {
        $response = $wineResponses["curso"];
    } elseif (strpos($message, 'cata') !== false) {
        $response = $wineResponses["cata"];
    } elseif (strpos($message, 'reseña') !== false) {
        $response = $wineResponses["reseña"];
    } elseif (strpos($message, 'precio') !== false) {
        $response = $wineResponses["precio"];
    } else {
        $response = $default;
    }
    return response()->json(['message' => $response]);
});
 
require __DIR__.'/auth.php';
