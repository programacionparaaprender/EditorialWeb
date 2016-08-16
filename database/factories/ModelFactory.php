<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(EditorialWeb\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});
//['id', 'nombre', 'año','idgenero','idtipoed','cantpagina','edicion','idnivel','descripcion','cantidad','ruta','precio'];
$factory->define(EditorialWeb\Libro::class, function (Faker\Generator $faker) {
    return  ['nombre' => $faker->name,
             'año'=>$faker->date(),
             'idgenero'=>'1',
             'idtipoed'=>'1',
             'cantpaginas'=>'300',
             'edicion'=>'1',
             'idnivel'=>'1',
             'descripcion'=>'fsdfsdgdsgdsgdg',
             'cantidad'=>'100',
             'precio'=>'500',
             'ruta'=>'img/text.png'];
});

$factory->define(EditorialWeb\Representante::class, function (Faker\Generator $faker) {
    return  ['cedula'=>$faker->isbn10, 
            'nombre'=>$faker->firstName,   
            'apellido'=> $faker->lastName,   
            'direccion'=> $faker->address, 
            'telefono'=>'04166835380',
            'rif'=>$faker->isbn13,
            'email'=> $faker->email,  
            'password'=> bcrypt('gil20'),     
            'pregunta'=>'como me llamo',
            'respuesta'=>'Jhonny',   
            'idnivel'=>'1',
            'nombreEscuela'=>'Felipe Carrillo',       
            'admin'=>'2']; 
		
});