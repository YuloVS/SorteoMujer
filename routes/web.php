<?php

use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\SorteoController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


//Route::get('/', [InscripcionController::class, 'show']);
Route::get('/', function() { return redirect('/verificar');});
Route::post('/formulario', [InscripcionController::Class, 'store']);

Route::get('/verificar', function() { return Inertia::render('Verificar'); })->name("verificar");
Route::post('/verificar', [ProductosController::class, 'consultarPremio'])->name("verificando");


Route::post('/sorteo', [SorteoController::class, 'realizarSorteo'])->middleware('auth');
Route::get('/sorteos', [SorteoController::class, 'show'])->middleware('auth')->name("sorteo");

Route::get('/ganadores', [SorteoController::class, 'ganadores'])->middleware('auth')->name("ganadores");
Route::get('/productos', [SorteoController::class, 'productos'])->middleware('auth')->name("productos");

Route::get('test', function(){ dd(\App\Models\Inscripcion::all()->toArray()); })->middleware('auth');

