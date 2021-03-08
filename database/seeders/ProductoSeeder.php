<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    private array $productos = [
        [
            "descripcion" => "HELADERA",
            "cantidad" => 1,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "BICICLETA",
            "cantidad" => 25,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "TABLET",
            "cantidad" => 1,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "SECADOR DE ROPA",
            "cantidad" => 7,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "HORNO",
            "cantidad" => 21,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "PARLANTE",
            "cantidad" => 17,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "VENTILADOR",
            "cantidad" => 20,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "PLANCHITA",
            "cantidad" => 20,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "SECADOR DE CABELLO",
            "cantidad" => 20,
            "lugar" => "9 DE JULIO 1536 5° CONSEJO PROVINCIAL DE LA MUJER",
        ],
        [
            "descripcion" => "LICUADORA",
            "cantidad" => 1,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "CAFETERA",
            "cantidad" => 20,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "JUGUERA",
            "cantidad" => 2,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "PLANCHA",
            "cantidad" => 2,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "SANDWICHERA",
            "cantidad" => 20,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "EXPRIMIDORA",
            "cantidad" => 20,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "PAVA ELECTRICA",
            "cantidad" => 20,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "TOSTADORA",
            "cantidad" => 20,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
        [
            "descripcion" => "AURICULARES",
            "cantidad" => 7,
            "lugar" => "BUENOS AIRES 1536 ENTRE 3 DE ABRIL y RIVADAVIA",
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->productos as $producto)
        {
            Producto::create($producto);
        }
    }
}
