<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcionRequest;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /*
     * Método que retorna la vista para la inscripción
     */
    public function index()
    {
        return view('Prueba.inscripcion');
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
            //return view('a.la.vista.que.corresponda')->with($inscripcion->id);
            return 'ud ha sido inscripto con el número: ' . $inscripcion->id;
        }
    }
}
