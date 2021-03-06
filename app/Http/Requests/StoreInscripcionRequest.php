<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInscripcionRequest extends FormRequest
{
    public function authorize()
    : bool
    {
        return true;
    }

    public function rules()
    : array
    {
        return [
            'dni' => 'digits_between:7,8|required|integer|unique:App\Models\Inscripcion,dni',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|max:15',
            'email' => 'required|email',
            'direccion' => 'required|string'
        ];
    }

    public function messages()
    : array
    {
        return [
            'dni.digits_between' => 'Ingrese un DNI válido.',
            'dni.required' => 'Debe ingresar su DNI',
            'dni.integer' => 'Ingrese un DNI válido.',
            'dni.unique' => 'Esta persona ya está participando.',

            'nombre.required' => 'Debe ingresar su nombre.',
            'nombre.string' => 'Debe ingresar solamente letras.',

            'apellido.required' => 'Debe ingresar su apellido.',
            'apellido.string' => 'Debe ingresar solamente letras.',

            'telefono.required' => 'Debe ingresar un número de contacto.',
            'telefono.max' => 'Debe ingresar un número válido.',

            'email.required' => 'Debe ingresar un email de contacto.',
            'email.email' => 'Debe ingresar un email válido.',

            'direccion.required' => 'Debe ingresar una dirección.',
            'direccion.string' => 'Ingrese solamente calle, número y barrio.',
            
        ];
    }
}
