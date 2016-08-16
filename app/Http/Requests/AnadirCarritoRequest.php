<?php namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
class AnadirCarritoRequest extends Request {
    public function authorize(){
        $user = Auth::user();
        if($user){ return true; } //si ha iniciado sesión es que funciona
        return false;    
    }
    public function rules(){
        return[
			'id' => 'required|exists:libros,id',
			'name' => 'required',
                        'qty' => 'required',
                        'price'=> 'required',
//			'imagen' => 'required|image|max:20000'
			//
		];
	}

}
