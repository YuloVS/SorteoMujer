<?php

use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\SorteoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::inertia('/sorteos', 'sorteos/sorteo')->name('sorteos');

//Route::post('/InscripcionController', function (\Illuminate\Http\Request $request){ $request->dd(); });

Route::get('/', [InscripcionController::class, 'show']);
Route::post('/formulario', [InscripcionController::Class, 'store']);

Route::get('/sorteo', [SorteoController::class, 'realizarSorteo']);

Route::get('test', function(){ dd(\App\Models\Inscripcion::all()->toArray()); })->middleware('auth');
