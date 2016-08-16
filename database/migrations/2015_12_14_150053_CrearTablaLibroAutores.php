<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibroAutores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libroautores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idlibro')->unsigned();
			$table->integer('idautor')->unsigned();
			//$table->primary('id');
			$table->foreign('idlibro')->references('id')->on('libros');
			$table->foreign('idautor')->references('id')->on('autores');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('libroautores');
	}

}
