<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\productos;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prodcutos  $prodcutos
     * @return \Illuminate\Http\Response
     */
    public function show(prodcutos $prodcutos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prodcutos  $prodcutos
     * @return \Illuminate\Http\Response
     */
    public function edit(prodcutos $prodcutos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prodcutos  $prodcutos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodcutos $prodcutos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prodcutos  $prodcutos
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodcutos $prodcutos)
    {
        //
    }

    public function buscarPremio($dni)
    {
        $persona = Inscripcion::where('dni', $dni)->first();
        if($persona->producto_id != 0)
        {
            $premio = Producto::where('id', $persona->producto_id);
            return [$persona, $premio];
        }
        else
        {
            return 'no gano ningùn premio';
        }


    }
}