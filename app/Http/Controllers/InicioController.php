<?php namespace EditorialWeb\Http\Controllers;

use EditorialWeb\Http\Controllers\Controller;
use Validator;
use EditorialWeb\Http\Requests\RegistroRequest;
use DB;
class InicioController extends Controller {
    public function __construct(){$this->middleware('auth');}
    public function getIndex(){return view('inicio');}
    public function missingMethod($parameters = array()){abort(404);}
    public function getRegistrarEmpleado(){return view('empleados.registrar');}
    
    public function postRegistrarEmpleado(RegistroRequest $request){
//        $validator = $this->validator($request->all());
//        if ($validator->fails()){
//            $this->throwValidationException($request, $validator);
//	}
//        //$this->create($request->all());
//        //Representante::create([
//        DB::table('representantes')->insert(['nombre'=>$request->get('cedula'),   
//            'apellido'=> $request->get('nombre'),   
//            'direccion'=> $request->get('apellido'), 
//            'telefono'=>$request->get('direccion'),
//            'rif'=>$request->get('telefono'),
//            'email'=> $request->get('rif'),  
//            'password'=> bcrypt($request->get('password')),     
//            'pregunta'=>$request->get('pregunta'),
//            'respuesta'=>$request->get('respuesta'),   
//            'idnivel'=>$request->get('idnivel'),
//            'nombreEscuela'=>$request->get('nombreEscuela'),
//            'admin'=>'2',]);
//        return redirect('inicio');
                DB::table('representantes')->insert([
    			'cedula' => $request->get('cedula'),
    			'nombre' => $request->get('nombre'),
    			'apellido' => $request->get('apellido'),
    			'direccion' => $request->get('direccion'),
    			'telefono' => $request->get('telefono'),
    			'rif' => $request->get('rif'),
    			'email' => $request->get('email'),
    			'password' => bcrypt($request->get('password')),
    			'pregunta' => $request->get('pregunta'),
    			'respuesta' => $request->get('respuesta'),
    			'idnivel' => $request->get('idnivel'),
    			'nombreEscuela' => $request->get('nombreEscuela')

    			]);
//        Auth::login($this->create($request->all()));
        return view('inicio');
    }
    public function validator(array $data){
    	return Validator::make($data, [
    
    			'cedula' => 'required|max:255|unique:representantes',
    			'nombre' => 'required|max:255',
    			'apellido' =>'required|max:255',
    			'direccion' => 'required|max:255',
    			'telefono' => 'required|max:255',
    			'rif' => 'required|max:255|unique:representantes',
    			'email' => 'required|email|max:255|unique:representantes',
    			'password' => 'required|confirmed|min:6',
    			'pregunta' => 'required|max:255',
    			'respuesta' => 'required|max:255',
    			'idnivel' => 'required|max:255',
    			'nombreEscuela' => 'required|max:255',
    			]);
    }
//    public function create(array $data){
//    	return Representante::create([
//    			'cedula' => $data['cedula'],
//    			'nombre' => $data['nombre'],
//    			'apellido' => $data['apellido'],
//    			'direccion' => $data['direccion'],
//    			'telefono' => $data['telefono'],
//    			'rif' => $data['rif'],
//    			'email' => $data['email'],
//    			'password' => bcrypt($data['password']),
//    			'pregunta' => $data['pregunta'],
//    			'respuesta' => $data['respuesta'],
//    			'idnivel' => $data['idnivel'],
//    			'nombreEscuela' => $data['nombreEscuela'],
//                        'admin'=>'2']);
//    }
}
