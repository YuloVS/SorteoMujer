<?php

//use App\Http\Controllers\InscripcionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Route::get('/inscripcion', [InscripcionController::class, 'index'])->name('inscripcion');
Route::inertia('/inscripcion', 'Inscripcion');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

//Route::post('/InscripcionController', function (\Illuminate\Http\Request $request){ $request->dd(); });


//route::get('/inscripcion', [InscripcionController::Class, 'index']);
//route::post('/inscripcion', [InscripcionController::Class, 'store']);
