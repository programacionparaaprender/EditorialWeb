<?php
use Illuminate\Database\Seeder;
use EditorialWeb\Pedido;
class PedidosSeeder extends Seeder {
    public function run(){
        Pedido::create(['idrepresentante'=>'1','total'=> '1000','idestado'=>'1']); 
	Pedido::create(['idrepresentante'=>'2','total'=> '2000','idestado'=>'1']);
    }
}