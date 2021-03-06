<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcionRequest;
use App\Models\Inscripcion;
use Illuminate\Http\RedirectResponse;
use Inertia\Controller;
use Inertia\Inertia;
use Inertia\Response;

class InscripcionController extends Controller
{
    public function show()
    : Response
    {
        return Inertia::render('Inscripcion');
    }


    /*
     * Método que almacena la inscripcion para el sorteo
     * verificando que no se registre mas de una vez una misma persona
     */
    public function store(StoreInscripcionRequest $request)
    : RedirectResponse
    {
        if ($request->validated()) {
            $inscripcion = new Inscripcion();
            $inscripcion->dni = $request->dni;
            $inscripcion->nombre = $request->nombre;
            $inscripcion->apellido = $request->apellido;
            $inscripcion->telefono = $request->telefono;
            $inscripcion->email = $request->email;
            $inscripcion->direccion = $request->direccion;
            $inscripcion->save();
            return back();
        }
    }
}
