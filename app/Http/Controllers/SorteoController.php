<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcionRequest;
use App\Models\Inscripcion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SorteoController extends Controller
{
    /*
     *  Método que realiza el sorteo y registra al ganador,
     *  asigna el nro del sorteo al campo 'ganador' del registro de la persona
     */
    public function realizarSorteo()
    {
        $participantes = Inscripcion::whereGanador(0)->get();
        $nroDeSorteo = (Inscripcion::max('ganador')) + 1;
        $ganador = $participantes->random();
        $ganador->ganador = $nroDeSorteo;
        $ganador->save();
        return $ganador;
    }

    public function show()
    {
        return Inertia::render('Sorteo', [
            "participantes" => Inscripcion::elegibles(),
        ]);
    }

    public function ganadores()
    {
        $ganadores = Inscripcion::where('ganador', '>',  0)->orderby('ganador','asc')->get();
        return Inertia::render('Listado', ['ganadores' => $ganadores]);
    }

    public function productos()
    {
        return Inertia::render('Productos');
    }

    public function verificar()
    {
        return Inertia::render('Verificar');
    }

    public function control()
    {
        $premio = "No bro, no ganaste nada";
        return Inertia::render('Control', ['premio' => $premio]);
    }
}
