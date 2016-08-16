<?php

namespace EditorialWeb\Http\Requests;

use EditorialWeb\Http\Requests\Request;
use Auth;
class CambioRolRequest extends Request{
    public function authorize(){
//        $user = Auth::user();
//        if($user->admin==0){
//            return true;
//        }
//        return false;
        return (Auth::user()->admin==1)?true:false;
    }
    public function rules(){
        return ['id'=>'required',
            'selector' => 'required',
        ];
    }
}
