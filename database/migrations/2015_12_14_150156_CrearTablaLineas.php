<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLineas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lineas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idpedido')->unsigned();
			$table->integer('idlibro')->unsigned();
			$table->integer('cantidad');
			$table->double('costo');
			//$table->primary('id');
			$table->foreign('idpedido')->references('id')->on('pedidos');
			$table->foreign('idlibro')->references('id')->on('libros');
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
		Schema::drop('lineas');
	}

}
