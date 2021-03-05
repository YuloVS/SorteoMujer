<?php

use App\Http\Controllers\InscripcionController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::inertia('/sorteos', 'sorteos/sorteo')->name('sorteos');
route::get('/formulario', [InscripcionController::Class, 'index']);
route::post('/formulario', [InscripcionController::Class, 'store']);
