<?php
use Illuminate\Database\Seeder;
use EditorialWeb\Nivel;

class NivelesSeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Nivel::create(['nombre'=>'primaria',    'descripcion'=>'Se trata de los libros de escuela primaria de nivel de 1,2,3,4,5,6 grado']);
		Nivel::create(['nombre'=>'secundaria',  'descripcion'=>'Se trata de los libros de liceos con el para estudiante de 1,2,3,4 y 5 año']); 
		Nivel::create(['nombre'=>'primaria1',   'descripcion'=>'Para primer grado']);
		Nivel::create(['nombre'=>'primaria2',   'descripcion'=>'Para segundo grado']); 
		Nivel::create(['nombre'=>'primaria3',   'descripcion'=>'Para tercer grado']);
		Nivel::create(['nombre'=>'primaria4',   'descripcion'=>'Para cuarto grado']); 
		Nivel::create(['nombre'=>'primaria5',   'descripcion'=>'Para quinto grado']);
		Nivel::create(['nombre'=>'primaria6',   'descripcion'=> 'Para sexto grado']); 
		Nivel::create(['nombre'=>'secundaria1', 'descripcion'=>'Para primer año']);
		Nivel::create(['nombre'=> 'secundaria2','descripcion'=>'Para segundo año']); 
		Nivel::create(['nombre'=>'secundaria3', 'descripcion'=>'Para tercer año']);
		Nivel::create(['nombre'=> 'secundaria4','descripcion'=>'Para cuarto año']); 
		Nivel::create(['nombre'=>'secundaria5', 'descripcion'=>'Para quinto año']); 
	}
}