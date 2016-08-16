<?php namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;

class IniciarSesionRequest extends Request {
    public function authorize(){ return true; }
    public function rules(){
        return ['email' => 'required|email', 'password' => 'required',];
    }
}
