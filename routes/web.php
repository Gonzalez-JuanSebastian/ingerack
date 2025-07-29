<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/** == Rutas == **/
Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/proyecto', function () {
    return view('proyecto');
});

Route::get('/mantenimiento', function () {
    return view('mantenimiento');
});

/** == Formulario ==**/
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');

Route::get('/contacto/enviar', function() {
    return "Estás intentando acceder con GET, pero esta ruta solo acepta POST.";
});


#Route::get('/contacto', function () {
#    return view('contacto');
#});


#Route::get('/', function () {
#    return Inertia::render('Welcome', [
#        'canLogin' => Route::has('login'),
#        'canRegister' => Route::has('register'),
#        'laravelVersion' => Application::VERSION,
#        'phpVersion' => PHP_VERSION,
#    ]);
#});

/*
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/