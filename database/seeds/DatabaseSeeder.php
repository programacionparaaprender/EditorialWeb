<?php

use Illuminate\Database\Seeder;
use EditorialWeb\Autor;
use EditorialWeb\TipoEdicion;
use EditorialWeb\Genero;
use EditorialWeb\Nivel;
use EditorialWeb\Libro;
use EditorialWeb\LibroAutor;
//use EditorialWeb\Empleado;
use EditorialWeb\Representante;
use EditorialWeb\EstadoPedido;
use EditorialWeb\Pedido;
use EditorialWeb\Linea;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		/*
		Foto::truncate();
		Album::truncate();
		Usuario::truncate();

		$this->call('UsuariosSeeder');
		$this->call('AlbumesSeeder');
		$this->call('FotosSeeder');*/
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Linea::truncate();
		Pedido::truncate();
                EstadoPedido::truncate();
		Representante::truncate();
		//Empleado::truncate();
		LibroAutor::truncate();
		Libro::truncate();
		Autor::truncate();
		TipoEdicion::truncate();
		Genero::truncate();
		Nivel::truncate();

		$this->call('AutoresSeeder');
		$this->call('TipoEdicionesSeeder');
		$this->call('GenerosSeeder');
		$this->call('NivelesSeeder');
		$this->call('LibrosSeeder');
		$this->call('LibroAutoresSeeder');
		//$this->call('EmpleadosSeeder');
		$this->call('RepresentantesSeeder');
                $this->call('EstadoPedidosSeeder');
		$this->call('PedidosSeeder');
		$this->call('LineasSeeder');
	}

}
