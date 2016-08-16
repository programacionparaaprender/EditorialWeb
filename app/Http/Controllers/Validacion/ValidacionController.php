<?php namespace EditorialWeb\Http\Controllers\Validacion;

use EditorialWeb\Http\Controllers\Controller;
use EditorialWeb\Http\Requests\IniciarSesionRequest;
use EditorialWeb\Representante;
use EditorialWeb\Http\Requests\RecuperarContrasenaRequest;
use EditorialWeb\Http\Requests\RegistroRequest;
use Auth;
use DB;
class ValidacionController extends Controller 


{
    public function __construct(){
        $this->middleware('guest', ['except' => 'getSalida']);
    }

    public function getRegistro(){return view('validacion.registro');}
    
    public function postRegistro(RegistroRequest $request){
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
        return view('bienvenida');//chris');
    }
    
    public function getInicio(){ return view('validacion.inicio'); }
    
    public function postInicio(IniciarSesionRequest $request){
//        $user= Auth::user($request->all());
//        Auth::login($user);
//        return view('inicio');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->has('remember'))){
            return redirect()->intended($this->redirectPath());  
        }
        return redirect($this->loginPath())
		->withInput($request->only('email', 'remember'))
		->withErrors(['email' => $this->getFailedLoginMessage(),]);
    }
    
    protected function getFailedLoginMessage(){
        return 'email o contraseña incorrectos';  
    }
    public function getSalida(){
        Auth::logout();
        return redirect(property_exists($this, 
                'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
    public function redirectPath(){
        if (property_exists($this, 'redirectPath')){return $this->redirectPath;}
        return property_exists($this, 
                'redirectTo') ? $this->redirectTo : '/inicio';
    }
    public function loginPath(){
        return property_exists($this, 
                'loginPath') ? $this->loginPath : '/validacion/inicio';
    }
    public function getRecuperar(){ return view('validacion.recuperar'); }
    
    public function postRecuperar(RecuperarContrasenaRequest $request){
        $pregunta = $request->get('pregunta');
        $respuesta = $request->get('respuesta');
        $email = $request->get('email');
        $usuario = Representante::where('email','=',$email)->first();
        if($pregunta === $usuario->pregunta && $respuesta === $usuario->respuesta){
            $contrasena=$request->get('password');
            $usuario->password = bcrypt($contrasena);
            $usuario->save(); 
            return redirect('/validacion/inicio')->with(['recuperada'=>'La contraseña se cambio. Inicia sesión']);
        }
        return redirect('/validacion/recuperar')
    ->withInput($request->only('email','pregunta'))
    ->withErrors(['pregunta'=>'La pregunta y/o respuesta ingresada no coinciden.']);
    }
    
    public function missingMethod($parameters = array()){ abort(404); }
    
}
