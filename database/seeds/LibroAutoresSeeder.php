<?php
use Illuminate\Database\Seeder;
use EditorialWeb\LibroAutor;

class LibroAutoresSeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		LibroAutor::create(['idlibro'=>'1','idautor'=> '15']);
		LibroAutor::create(['idlibro'=>'1','idautor'=> '16']); 
		LibroAutor::create(['idlibro'=>'2','idautor'=> '4']);
		LibroAutor::create(['idlibro'=>'4','idautor'=> '6']);
		LibroAutor::create(['idlibro'=>'4','idautor'=> '7']); 
	}
}