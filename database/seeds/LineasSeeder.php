<?php
use Illuminate\Database\Seeder;
use EditorialWeb\Linea;
class LineasSeeder extends Seeder {
    public function run(){
        Linea::create(['idpedido'=>'1', 'idlibro'=>'1','cantidad'=> '1','costo'=> '500']); 
	Linea::create(['idpedido'=>'1', 'idlibro'=>'2','cantidad'=> '1','costo'=> '500']); 
	Linea::create(['idpedido'=>'2', 'idlibro'=>'1','cantidad'=> '5','costo'=> '1000']); 
	Linea::create(['idpedido'=>'2', 'idlibro'=>'2','cantidad'=> '2','costo'=> '1000']);
    }
}