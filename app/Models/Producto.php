<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ["descripcion", "cantidad", "lugar"];

    public static function corregirLugar()
    {
        self::whereLugar("BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA")->get()->map(function($producto){
        $producto->lugar = "PELLEGRINI 571";
        $producto->save();
         });
    }
}

