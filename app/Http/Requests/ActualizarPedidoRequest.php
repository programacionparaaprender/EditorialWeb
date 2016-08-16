<?php namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
class ActualizarPedidoRequest extends Request {
   public function authorize(){
        $user = Auth::user();
        if($user){
            return true;
        }
        return false;
    }
    public function rules(){
        return  ['id'=>'required',
        'selector' => 'required|exists:estadopedidos,id'];//'idestado' => 'required'];//
    }
}
