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
            'nombre' => 'required|alpha|max:255',
            'apellido' => 'required|alpha|max:255',
            'telefono' => 'required|integer|digits_between:9,10',
            'email' => 'required|email',
            'direccion' => 'required|regex:[a-zA-Z0-9 ]+|max:255'
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
            'nombre.alpha' => 'Ingrese un nombre válido.',
            'nombre.max' => 'Ingrese un nombre válido.',

            'apellido.required' => 'Debe ingresar su apellido.',
            'apellido.alpha' => 'Ingrese un apellido válido.',
            'apellido.max' => 'Ingrese un apellido válido.',

            'telefono.required' => 'Debe ingresar un número de contacto.',
            'telefono.integer' => 'Debe ingresar un número válido.',
            'telefono.digits_between' => 'Debe ingresar un número válido.',

            'email.required' => 'Debe ingresar un email de contacto.',
            'email.email' => 'Debe ingresar un email válido.',

            'direccion.required' => 'Debe ingresar una dirección.',
            'direccion.regex' => 'Ingrese solamente calle, número y barrio.',
            'direccion.max' => 'Ingrese solamente calle, número y barrio.',

        ];
    }
}
