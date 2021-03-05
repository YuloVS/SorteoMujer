<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcionRequest;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /*
     * Método que almacena la inscripcion para el sorteo
     * verificando que no se registre mas de una vez una misma persona
     */
    public function store(StoreInscripcionRequest $request)
    {
        if ($request->validated()) {
            $inscripcion = new Inscripcion();
            $inscripcion->dni = $request->dni;
            $inscripcion->nombre = $request->nombre;
            $inscripcion->apellido = $request->apellido;
            $inscripcion->telefono = $request->telefono;
            $inscripcion->email = $request->email;
            $inscripcion->ganador = $request->ganador;
            $inscripcion->save();
            return view('a.la.vista.que.corresponda');
        }
    }
}
