<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TestController;

// routes/web.php
Route::get('/home', function () {
    return view('layouts.home');
});


Route::get('/prueba', function () {
    return view('prueba');
});


Route::get('/index', function () {
    return view('layouts.index');
})->name('indexprincipal');

Route::get('/index1', function () {
    return view('layouts.index1');
})->name('indexsecundario');


// routes/web.php
Route::get('/registro', function () {
    return view('layouts.registro');
})->name('registro');

Route::post('/crearRegistro', [RegisteredUserController::class, 'store'])->name('crearRegistro');
//lo cambié a post 

Route::get('/loginn', function () {
    return view('layouts.login');
})->name('iniciodesesion');

Route::get('/exitoso', function () {
    return view('layouts.nuevacontraseña');
})->name('exitoso');

Route::post('/validate-password', function (Illuminate\Http\Request $request) {
    $request->validate([
        'password' => 'required|string|min:4',
        'password_confirmation' => 'required|string|same:password',
    ], [
        'password.required' => 'Por favor, ingrese una contraseña.',
        'password.min' => 'La contraseña debe tener al menos 4 caracteres.',
        'password_confirmation.required' => 'Por favor, confirme su contraseña.',
        'password_confirmation.same' => 'Las contraseñas no coinciden. Por favor, inténtelo de nuevo.',
    ]);

    // Si la validación pasa, redirige al usuario al login
    return redirect()->route('exitoso');
})->name('validate-password');
    



Route::get('/rcp', function () {
    return view('layouts.recuperacion1');
})->name('recuperar_contraseña');

// routes/web.php Numero
Route::get('/rcp1', function () {
    return view('layouts.recnumero');
})->name('rcpnumero');

Route::view('/recnumero', 'layouts.recnumero')->name('recnumero');
Route::get('/rcp2', function () {
    return view('layouts.recnumero2');
})->name('recuperaciondecontraseña2');


Route::get('/passrestablecida', function () {
    return view('layouts.restablecerpass');
});
Route::get('/nc', function () {
    return view('layouts.nuevacontraseña');
});

// routes/web.php Correo

Route::view('/recuperacion1', 'layouts.recuperacion1')->name('recuperacion1');
Route::view('/reccorreo', 'layouts.reccorreo')->name('reccorreo');
Route::view('/reccorreo2', 'layouts.reccorreo2')->name('reccorreo2'); // Suponiendo que esta es la vista siguient





Route::view('/recnumero', 'layouts.recnumero')->name('recnumero');
Route::get('/rcp2', function () {
    return view('layouts.recnumero2');
})->name('recuperaciondecontraseña2');
Route::get('/restablecerpass', function () {
    return view('layouts.restablecerpass');
})->name('restablecercontraseña');




// routes/web.php menu paciente

Route::get('/menu', function () {
    return view('layouts.menupaciente');
})->name('menupaciente');

Route::get('/completo', function () {
    return view('layouts.registrocompletado');
})->name('completado');


// Grupo de rutas de usuario
Route::prefix('crud')->group(
    function () {
        Route::resource('user', TestController::class)->except(['index']);
    }
);

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
