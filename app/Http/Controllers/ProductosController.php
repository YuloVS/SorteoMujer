<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\productos;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function buscarPremio($dni)
    {
        $persona = Inscripcion::where('dni', $dni)
            ->where('producto_id', '!=', 0)
            ->first();
        if($persona != null)
        {
            $premio = Producto::where('id', $persona->producto_id);
            $persona->verificado = 1;
            $persona->save();
            return [$persona, $premio];
        }
        else
        {
            return 'no gano ningun premio';
        }
    }

    public function ganadores()
    {

    }
}
