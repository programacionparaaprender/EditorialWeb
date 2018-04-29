<?php namespace EditorialWeb\Http\Controllers;
//use EditorialWeb\Http\Requests;
use EditorialWeb\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use EditorialWeb\Libro;
use EditorialWeb\LibroAutor;
use EditorialWeb\Pedido;
use EditorialWeb\Linea;
use EditorialWeb\Http\Requests\CrearLibroRequest;
use EditorialWeb\Http\Requests\ActualizarLibroRequest;
use Carbon\Carbon;
class LibroController extends Controller {
    public function getIndex(){
        $libros = Libro::paginate();
        return view('libros.mostrar-libros3',['libros'=>$libros]);
    }
    public function getCreate(){ return view('libros.crear-libro'); }
    public function postCreate(CrearLibroRequest $request){//store(CrearLibroRequest $request){
        $nombre = $request->get('nombre');
        $año = $request->get('anio');
        $idgenero = $request->get('idgenero');
        $idtipoed = $request->get('idtipoed');
        $cantpaginas = $request->get('cantpaginas');
        $edicion = $request->get('edicion');
        $idnivel = $request->get('idnivel');
        $descripcion = $request->get('descripcion');
        $cantidad = $request->get('cantidad');
        $precio = $request->get('precio');
        $imagen = $request->file('imagen');
        $ruta = '/img/';
        $nom = sha1(Carbon::now()).'.'.$imagen->guessExtension();
        $imagen->move(getcwd().$ruta, $nom);
        Libro::create(['nombre'=>$nombre,'año'=>$año,'idgenero'=>$idgenero,
            'idtipoed'=>$idtipoed,'cantpaginas'=>$cantpaginas,
            'edicion'=>$edicion,'idnivel'=>$idnivel,'descripcion'=>$descripcion,
            'cantidad'=>$cantidad,'ruta'=>$ruta.$nom,'precio'=>$precio]);
        $idautor = $request->get('idautor');
        $ultimolibro = 0;
        foreach(Libro::all() as $libro){$ultimolibro=$libro;}
        LibroAutor::create(['idlibro'=>$ultimolibro->id,'idautor'=> $idautor]);

        $libros = Libro::all();
        return view('libros.mostrar-libros',['libros'=>$libros])->with('creada', 'el libro ha sido creado');
    }

    public function getActualizar($id){
        $libro = Libro::find($id);
        $libroautor= LibroAutor::find($id);
        return view('libros.edit', ['libro' => $libro,'libroautor'=>$libroautor]);
    }
    public function postActualizar(ActualizarLibroRequest $request){
        $libro =Libro::find($request->get('id'));
        $libro->nombre = $request->get('nombre');
        $libro->año = $request->get('anio');
        $libro->idgenero = $request->get('idgenero');
        $libro->idtipoed = $request->get('idtipoed');
        $libro->cantpaginas = $request->get('cantpaginas');
        $libro->edicion = $request->get('edicion');
        $libro->idnivel = $request->get('idnivel');
        $libro->descripcion = $request->get('descripcion');
        $libro->cantidad = $request->get('cantidad');
        $libro->precio = $request->get('precio');
        $imagen = $request->file('imagen');
        $ruta = '/img/';
        $nom = sha1(Carbon::now()).'.'.$imagen->guessExtension();
        $imagen->move(getcwd().$ruta, $nom);
        $libro->ruta = $ruta.$nom;
        $libro->save();
        $libroautor = LibroAutor::find($request->get('id'));
        $libroautor->idautor = $request->get('idautor');
        $libroautor->save();

        $libros = Libro::all();
        return view('libros.mostrar-libros',['libros'=>$libros])->with('creada', 'el libro ha sido creado');
    }

    public function getDestruir($id){
        $idpedido = null;
        foreach(Linea::all()as $linea){
            if($id == $linea->idlibro){
                $idpedido = $linea->idpedido;
                $linea->delete();
                $linea->save();  
            }
        }
        if($idpedido!=null){
            foreach(Pedido::all()as $pedido){
                if($idpedido == $pedido->id){
                    $pedido->delete();
                    $pedido->save();  
                }
            }
        }
        $libro = Libro::find($id);
        $libro->delete();
        $libro->save();
        $libros = Libro::all();
        return view('libros.mostrar-libros',['libros'=>$libros]);
    }
}
