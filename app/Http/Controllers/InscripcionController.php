<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcionRequest;
use App\Models\Inscripcion;
use Inertia\Controller;
use Inertia\Inertia;
use Inertia\Response;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Inertia::render('Inscripcion');
    }


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
            $inscripcion->save();
            return Inertia::render('Inscripto');
        }
    }
}
