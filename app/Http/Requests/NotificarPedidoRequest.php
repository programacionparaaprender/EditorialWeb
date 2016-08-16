<?php

namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;
use Auth;
class NotificarPedidoRequest extends Request{
    public function authorize(){
        $user = Auth::user();
        if($user){
            return true;
        }
        return false;
//          return ($user)?true:false;
    }
    public function rules(){
        return  ['id'=>'required',
        'NombreBanco' => 'required',
        'NroOperacion' => 'required'];
    }
}
