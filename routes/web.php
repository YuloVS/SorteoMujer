<?php


use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\InscripcionController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Route::get('/inscripcion', [InscripcionController::class, 'index'])->name('inscripcion');
//Route::inertia('/inscripcion', 'inscripcion');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

<<<<<<< HEAD
Route::inertia('/sorteos', 'sorteos/sorteo')->name('sorteos');
route::get('/formulario', [InscripcionController::Class, 'index']);
route::post('/formulario', [InscripcionController::Class, 'store']);
=======
//Route::post('/InscripcionController', function (\Illuminate\Http\Request $request){ $request->dd(); });


route::get('/formulario', [InscripcionController::class, 'index']);
route::post('/formulario', [InscripcionController::class, 'store']);
>>>>>>> main
