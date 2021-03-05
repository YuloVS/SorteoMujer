<?php


use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\SorteoController;
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
//Route::inertia('/inscripcion', 'inscripcion');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


route::get('/formulario', [InscripcionController::Class, 'index']);
route::post('/formulario', [InscripcionController::Class, 'store']);

route::get('/sorteo', [SorteoController::Class, 'realizarSorteo']);
