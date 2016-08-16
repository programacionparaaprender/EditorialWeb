<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibros extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->date('año');
			$table->integer('idgenero')->unsigned();
			$table->integer('idtipoed')->unsigned();
			$table->integer('cantpaginas');
			$table->integer('edicion')->unsigned();
			$table->integer('idnivel')->unsigned();
			$table->string('descripcion');
			$table->integer('cantidad')->unsigned();
			$table->String('ruta');
			$table->double('precio')->unsigned();
			//$table->primary('id');
			$table->foreign('idgenero')->references('id')->on('generos');
			$table->foreign('idtipoed')->references('id')->on('tipoediciones');
			$table->foreign('idnivel')->references('id')->on('niveles');
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
		Schema::drop('libros');
	}

}
