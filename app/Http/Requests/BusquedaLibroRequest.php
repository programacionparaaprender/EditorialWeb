<?php

namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;

class BusquedaLibroRequest extends Request{
    public function authorize(){
        return true;
    }
    public function rules(){
        return['buscarlibro' => 'required',];
    }
}
