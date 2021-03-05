<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInscripcionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'dni' => 'digits_between:7,8|required|integer|unique:App\Models\Inscripcion,dni',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|max:15',
            'email' => 'required|email',
            'direccion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'dni.digits_between' => 'El DNI ingresado debe contener entre 7 y 8 dígitos.',
            'dni.required' => 'Debe ingresar su DNI',
            'dni.integer' => 'Debe ingresar solo números',
            'dni.unique' => 'Ya existe una persona participando con éste DNI',

            'nombre.required' => 'Debe ingresar su nombre',
            'nombre.string' => 'Debe ingresar solamente letras',

            'apellido.required' => 'Debe ingresar su apellido',
            'apellido.string' => 'Debe ingresar solamente letras',

            'telefono.required' => 'Debe ingresar un número de contacto',
            'telefono.max' => 'Debe ingresar un número válido',

            'email.required' => 'Debe ingresar un mail de contacto',
            'email.email' => 'Debe ingresar un mail válido',

            'direccion.required' => 'Debe ingresar una dirección',
            
        ];
    }
}
