<?php

namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;

class BuscarGeneroRequest extends Request{
    public function authorize(){ return true; }
    public function rules(){
        return['selector' => 'required|exists:generos,id'];  
    }
}
