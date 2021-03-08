<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function consultarPremio(Request $request)
    {
        $persona = Inscripcion::whereDni($request->dni)->where('producto_id', '<>', 0)->with('producto')->first();
        if($persona)
        {
            $persona->verificado = 1;
            $persona->save();
            return $persona->toArray();
        }
        return null;
    }
}
