<?php

use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\SorteoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/', [InscripcionController::class, 'show']);
Route::post('/formulario', [InscripcionController::Class, 'store']);

Route::post('/sorteo', [SorteoController::class, 'realizarSorteo'])->middleware('auth');
Route::get('/sorteos', [SorteoController::class, 'show'])->middleware('auth')->name("sorteo");

Route::get('/listado', [SorteoController::class, 'ganadores'])->middleware('auth')->name("ganadores");

Route::get('test', function(){ dd(\App\Models\Inscripcion::all()->toArray()); })->middleware('auth');

//Route::inertia('/sorteos', 'Sorteo');
