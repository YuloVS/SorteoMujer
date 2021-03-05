<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcionRequest;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class SorteoController extends Controller
{
    /*
     *
     */
    public function realizarSorteo()
    {
        $participantes = Inscripcion::all();
        $nroDeSorteo = ($participantes->max('ganador')) + 1;
        $ganador = $participantes->random();
        if($ganador->ganador != 0)
        {
            $this->realizarSorteo();
        }
        else
        {
            $ganador->ganador = $nroDeSorteo;
            $ganador->save();
        }
    }
}
