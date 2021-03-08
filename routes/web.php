<?php

use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\SorteoController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/', [InscripcionController::class, 'show']);
Route::post('/formulario', [InscripcionController::Class, 'store']);

Route::post('/sorteo', [SorteoController::class, 'realizarSorteo'])->middleware('auth');
Route::get('/sorteos', [SorteoController::class, 'show'])->middleware('auth')->name("sorteo");

Route::get('/ganadores', [SorteoController::class, 'ganadores'])->middleware('auth')->name("ganadores");

Route::get('test', function(){ dd(\App\Models\Inscripcion::all()->toArray()); })->middleware('auth');

//Route::get('/ganadores', [SorteoController::class, 'ganadores']);

Route::get('/ganadores2', [SorteoController::class, 'realizarSorteo']);
Route::get('/buscarPorDni/{dni}', [ProductosController::class, 'buscarPremio']);

//Route::inertia('/sorteos', 'Sorteo');
//Route::inertia('/sorteos', 'Sorteo');
