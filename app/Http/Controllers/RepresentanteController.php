<?php namespace EditorialWeb\Http\Controllers;
use EditorialWeb\Http\Controllers\Controller;
use EditorialWeb\Http\Requests\EditarPerfilRequest;
use Illuminate\Support\Facades\Auth;
use EditorialWeb\Representante;
use EditorialWeb\Http\Requests\CambioRolRequest;
class RepresentanteController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }
    public function getEditarPerfil(){ return view('representante.editar-perfil'); }
    public function postEditarPerfil(EditarPerfilRequest $request){
        $usuario= Auth::user();
        $usuario->nombre=$request->get('nombre');
        $usuario->apellido=$request->get('apellido');
        if($request->has('password')){ 
            $usuario->password = bcrypt($request->get('password'));
        }
        if($request->has('pregunta')){
            $usuario->pregunta = $request->get('pregunta');
            $usuario->respuesta = $request->get('respuesta');
        }
        $usuario->save();
	return redirect('/validado')->with('actualizado',
                'Su perfil a sido actualizado');
    }
    //validado/representante
    public function getRol(){
        return view('representante.roles',['representantes'=>$representantes=Representante::all()]);
    }
    public function postRol(CambioRolRequest $request){
        $representante=Representante::find($request->get('id'));
        $representante->admin=$request->get('selector');
        $representante->save();
        return view('representante.roles',['representantes'=>$representantes=Representante::all()]);
    }
    public function missingMethod($parameters = array()){ abort(404); } 
}
