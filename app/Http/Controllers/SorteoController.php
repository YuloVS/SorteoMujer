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

    public function productos()
    {
        return Inertia::render('Productos');
    }

    public function control()
    {
        $premio = "No bro, no ganaste nada";
        return Inertia::render('Control', ['premio' => $premio]);
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

                $ganadores[$i] = ["nombre" => $ganador->nombre, "apellido" => $ganador->apellido, "dni" =>$ganador->dni, "producto" =>$premio->descripcion];
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
