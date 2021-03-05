<?php


use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\SorteoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


route::get('/', [InscripcionController::Class, 'show']);
route::post('/formulario', [InscripcionController::Class, 'store']);

route::get('/sorteo', [SorteoController::Class, 'realizarSorteo']);
