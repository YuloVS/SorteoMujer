<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Producto;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreInscripcionRequest;
use Inertia\Response;

class SorteoController extends Controller
{
    /*
     *  Método que realiza el sorteo y registra al ganador,
     *  asigna el nro del sorteo al campo 'ganador' del registro de la persona

    public function realizarSorteo()
    {
        $participantes = Inscripcion::whereGanador(0)->get();
        $nroDeSorteo = (Inscripcion::max('ganador')) + 1;
        $ganador = $participantes->random();
        $ganador->ganador = $nroDeSorteo;
        $ganador->save();
        return $ganador;
    }

    */

    public function show()
    : Response
    {
        return Inertia::render('Sorteo');
    }

    public function ganadores()
    : Response
    {
        $ganadores = Inscripcion::where('ganador', '>',  0)->with('producto')->orderby('ganador','asc')->get();
        return Inertia::render('Listado', ['ganadores' => $ganadores]);
    }

    public function realizarSorteo()
    : array
    {
        $ganadores = [];
        for($i=0; $i<30; $i++)
        {
            $premiosDisponibles = Producto::where('cantidad', '>', 0)->get();
            $participantes = Inscripcion::whereGanador(0)->get();

            if((!($premiosDisponibles->isEmpty())) && (!($participantes->isEmpty())))
            {
                $premio = $premiosDisponibles->random();
                $ganador = $participantes->random();

                $premio->cantidad = ($premio->cantidad) - 1;
                $premio->save();

                $ganador->producto_id = $premio->id;
                $ganador->ganador = 1;
                $ganador->save();

                $ganadores[$i] = ["nombre" => $ganador->nombre, "apellido" => $ganador->apellido, "dni" =>$ganador->dni, "producto_id" =>$premio->id];
            }
        }
        return $ganadores;
    }

    public function ganadoresProductos()
    {
        $ganadores = Inscripcion::where("ganador", "<>", 0)->with("producto")->get();
        return $ganadores;
    }
}
