<?php namespace EditorialWeb\Http\Requests;
use EditorialWeb\Http\Requests\Request;
class EditarPerfilRequest extends Request {
    public function authorize(){return true;}
    public function rules(){
            return ['nombre'=> 'required',
            'apellido'=> 'required',
            'password' => 'min:6|confirmed',
            'pregunta'=> '',
            'respuesta'=>'required_with:pregunta', 
            //respuesta requerida si es ingresada pregunta
            ];
    }
}
