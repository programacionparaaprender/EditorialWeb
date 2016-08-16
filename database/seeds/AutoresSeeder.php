<?php
use Illuminate\Database\Seeder;
use EditorialWeb\Autor;
class AutoresSeeder extends Seeder {
	public function run(){
		Autor::create(['nombre' => 'William','apellido'=>'Stalling']);
		Autor::create(['nombre'=> 'Malba', 'apellido'=>'Tahan']);
        Autor::create(['nombre'=>'Adrián ','apellido'=>'Paenza']);
		Autor::create(['nombre'=>'Roald ','apellido'=>'Dahl']);
		Autor::create(['nombre'=>'Gianni ', 'apellido'=>'Rodari']);
		Autor::create(['nombre'=>'Lucy ', 'apellido'=>'Hawking ']);
		Autor::create(['nombre'=>'Stephen','apellido'=>'Hawking']);
        Autor::create(['nombre'=>'Antoine ', 'apellido'=>'De Saint-Exupery']);
		Autor::create(['nombre'=>'Pablo', 'apellido'=>'Bernasconi']);
		Autor::create(['nombre'=>'Luis María ','apellido'=>'Pescetti']);
		Autor::create(['nombre'=>'José','apellido'=>'Saramago']);
		Autor::create(['nombre'=>'Andrea','apellido'=>'Ferrari']);
		Autor::create(['nombre'=>'Mark','apellido'=>'Twain']);
		Autor::create(['nombre'=>'Mauro ','apellido'=>'Chumpitaz']);
		Autor::create(['nombre'=>'Jose R.', 'apellido'=>'Vizmanos']);
		Autor::create(['nombre'=>'Maximo', 'apellido'=>'Anzola']); 
	}
}