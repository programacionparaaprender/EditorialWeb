<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::controllers([
    'validacion' => 'Validacion\ValidacionController',
    'validado/representante' => 'RepresentanteController',
    'validado' => 'InicioController',
    'libros' => 'LibroController',
    'carrito'=> 'CarritoController',
    'reportes'=> 'ReporteController',
    'pedidos'=>'PedidoController',
    'busqueda'=>'BusquedaController',
    'emails'=>'EmailController',
    'excel'=>'ExcelController',
    'prueba' => 'PruebaController',
    '/' => 'BienvenidaController'
]);

//Route::auth();
//Route::get('/prueba','PruebaController@index');
