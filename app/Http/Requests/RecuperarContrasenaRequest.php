<?php namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;

class RecuperarContrasenaRequest extends Request {
    public function authorize(){ return true; }
    public function rules(){
        return ['email' => 'required|email|exists:representantes,email', 
            'password' => 'required|min:6|confirmed',
            'pregunta'=> 'required',
            'respuesta'=>'required',];
    }
}
