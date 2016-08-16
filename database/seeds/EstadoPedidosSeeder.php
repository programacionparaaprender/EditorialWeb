<?php
use Illuminate\Database\Seeder;
use EditorialWeb\EstadoPedido;

class EstadoPedidosSeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		EstadoPedido::create(['nombre'=>'En espera']);
		EstadoPedido::create(['nombre'=>'Pagado']);
		EstadoPedido::create(['nombre'=>'Enviado']);
                EstadoPedido::create(['nombre'=>'Devuelto']);
                EstadoPedido::create(['nombre'=>'Aprobado']);
	}
}