<?php

namespace EditorialWeb\Http\Controllers;

use EditorialWeb\Http\Controllers\Controller;
use EditorialWeb\Libro;

class PruebaController extends Controller 
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function getIndex()
    {
        $data['libros'] = Libro::all();
        return view('prueba', $data);
    }

}
