<?php

namespace EditorialWeb\Http\Controllers;

use EditorialWeb\Http\Controllers\Controller;
use EditorialWeb\Http\Requests\BusquedaLibroRequest;
use EditorialWeb\Libro;
use EditorialWeb\Genero;
use EditorialWeb\Http\Requests\BuscarGeneroRequest;
class BusquedaController extends Controller{

    public function getIndex(){
        return view('busqueda.busquedadinamica5',['libros'=>Libro::paginate(),'buscarlibro'=>'','generos'=>Genero::all(),'generoelegido'=>0]);
    }
    public function postIndex(BusquedaLibroRequest $request){
        $buscarlibro = $request->get('buscarlibro');
        $libros= Libro::paginate();
        return view('busqueda.busquedadinamica5',['libros'=>$libros,'buscarlibro'=>$buscarlibro,'generos'=>Genero::all(),'generoelegido'=>0]);
    }
    public function getGenero(){
        return view('busqueda.busquedadinamica5',['libros'=>Libro::paginate(),'buscarlibro'=>'','generos'=>Genero::all(),'generoelegido'=>0]);
    }
    public function postGenero(BuscarGeneroRequest $request){
        $libros= Libro::paginate();
        $generoelegido=$request->get('selector');
        return view('busqueda.busquedadinamica5',['libros'=>$libros,'buscarlibro'=>'','generos'=>Genero::all(),'generoelegido'=>$generoelegido]);
    } 
}
