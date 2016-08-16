<?php namespace EditorialWeb\Http\Controllers;

use EditorialWeb\Http\Controllers\Controller;

class LineaController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		return 'mostrando lineas del usuario';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearFoto()
	{
		return 'formulario de crear lineas';
	}
	public function postCrearFoto()
	{
		return 'almacenando linea';
	}
	public function getActualizarFoto()
	{
		return 'formulario de actualizar linea';
	}
	public function postActualizarFoto()
	{
		return 'actualizar linea';
	}
	public function getEliminarFoto()
	{
		return 'formulario eliminar linea';
	}
	public function postEliminarFoto()
	{
		return 'almacenando foto';
	}
	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}


//class LineaController extends Controller {
//
//	/**
//	 * Display a listing of the resource.
//	 *
//	 * @return Response
//	 */
//	public function index()
//	{
//		//
//	}
//
//	
//	public function create()
//	{
//		//
//	}
//
//	/**
//	 * Store a newly created resource in storage.
//	 *
//	 * @return Response
//	 */
//	public function store()
//	{
//		//
//	}
//
//	/**
//	 * Display the specified resource.
//	 *
//	 * @param  int  $id
//	 * @return Response
//	 */
//	public function show($id)
//	{
//		//
//	}
//
//	/**
//	 * Show the form for editing the specified resource.
//	 *
//	 * @param  int  $id
//	 * @return Response
//	 */
//	public function edit($id)
//	{
//		//
//	}
//
//	/**
//	 * Update the specified resource in storage.
//	 *
//	 * @param  int  $id
//	 * @return Response
//	 */
//	public function update($id)
//	{
//		//
//	}
//
//	/**
//	 * Remove the specified resource from storage.
//	 *
//	 * @param  int  $id
//	 * @return Response
//	 */
//	public function destroy($id)
//	{
//		//
//	}
//
//}
