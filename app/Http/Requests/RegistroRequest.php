<?php

namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;

class RegistroRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                	'cedula' => 'required|max:255|unique:representantes',
    			'nombre' => 'required|max:255',
    			'apellido' =>'required|max:255',
    			'direccion' => 'required|max:255',
    			'telefono' => 'required|max:255',
    			'rif' => 'required|max:255|unique:representantes',
    			'email' => 'required|email|max:255|unique:representantes',
    			'password' => 'required|confirmed|min:6',
    			'pregunta' => 'required|max:255',
    			'respuesta' => 'required|max:255',
    			'idnivel' => 'required|max:255',
    			'nombreEscuela' => 'required|max:255'
        ];
    }
}
