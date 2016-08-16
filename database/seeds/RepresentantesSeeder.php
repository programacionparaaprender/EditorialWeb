<?php
use Illuminate\Database\Seeder;
use EditorialWeb\Representante;

class RepresentantesSeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//		Representante::create(['cedula'=>'19738854', 'nombre'=>'Jhonny',   'apellido'=> 'Gil',   'direccion'=> 'Pto la Cruz - Anzoategui', 'telefono'=>'04166835380','rif'=>'197388541','email'=> 'gilsjhonny@gmail.com',  'password'=> bcrypt('gil20'),      'pregunta'=>'como me llamo','respuesta'=>'Jhonny',   'idnivel'=>'1','nombreEscuela'=>'Felipe Carrillo',       'admin'=>'0',]); 
//		Representante::create(['cedula'=>'19257821', 'nombre'=>'Manuel',   'apellido'=> 'Dun',   'direccion'=> 'Lecheria - Anzoategui',    'telefono'=>'04147658837','rif'=>'192578211','email'=> 'manueldun@gmail.com',   'password'=> bcrypt('manuel20'),   'pregunta'=>'como me llamo','respuesta'=>'manuel',   'idnivel'=>'2','nombreEscuela'=>'Diego Bautista Urbaneja','admin'=>'0',]); 
//		Representante::create(['cedula'=>'18099810', 'nombre'=>'Christian','apellido'=> 'Yanez', 'direccion'=> 'Carúpano - Sucre',         'telefono'=>'04248324709','rif'=>'180998101','email'=> 'xygesc@gmail.com',      'password'=> bcrypt('christian20'),'pregunta'=>'como me llamo','respuesta'=>'christian','idnivel'=>'1','nombreEscuela'=>'Tomas Alfaro Calatraba', 'admin'=>'0',]); 
//		Representante::create(['cedula'=>'19840230', 'nombre'=>'Luis',     'apellido'=> 'Correa','direccion'=> 'Barcelona - Anzoategui',   'telefono'=>'04167827769','rif'=>'198402301','email'=> 'alberto13711@gmail.com','password'=> bcrypt('luis20'),     'pregunta'=>'como me llamo','respuesta'=>'luis',     'idnivel'=>'2','nombreEscuela'=>'Maria Auxiliadora','admin'=>'1',]); 
                //DB::table('representantes')->delete();
                DB::table('representantes')->insert(['cedula'=>'19738854', 'nombre'=>'Jhonny',   'apellido'=> 'Gil',   'direccion'=> 'Pto la Cruz - Anzoategui', 'telefono'=>'04166835380','rif'=>'197388541','email'=> 'gilsjhonny@gmail.com',  'password'=> bcrypt('gil20'),      'pregunta'=>'como me llamo','respuesta'=>'Jhonny',   'idnivel'=>'1','nombreEscuela'=>'Felipe Carrillo',       'admin'=>'0',]); 
                DB::table('representantes')->insert(['cedula'=>'19257821', 'nombre'=>'Manuel',   'apellido'=> 'Dun',   'direccion'=> 'Lecheria - Anzoategui',    'telefono'=>'04147658837','rif'=>'192578211','email'=> 'manueldun@gmail.com',   'password'=> bcrypt('manuel20'),   'pregunta'=>'como me llamo','respuesta'=>'manuel',   'idnivel'=>'2','nombreEscuela'=>'Diego Bautista Urbaneja','admin'=>'0',]); 
                DB::table('representantes')->insert(['cedula'=>'18099810', 'nombre'=>'Christian','apellido'=> 'Yanez', 'direccion'=> 'Carúpano - Sucre',         'telefono'=>'04248324709','rif'=>'180998101','email'=> 'xygesc@gmail.com',      'password'=> bcrypt('christian20'),'pregunta'=>'como me llamo','respuesta'=>'christian','idnivel'=>'1','nombreEscuela'=>'Tomas Alfaro Calatraba', 'admin'=>'0',]); 
                DB::table('representantes')->insert(['cedula'=>'19840230', 'nombre'=>'Luis',     'apellido'=> 'Correa','direccion'=> 'Barcelona - Anzoategui',   'telefono'=>'04167827769','rif'=>'198402301','email'=> 'alberto13711@gmail.com','password'=> bcrypt('luis20'),     'pregunta'=>'como me llamo','respuesta'=>'luis',     'idnivel'=>'2','nombreEscuela'=>'Maria Auxiliadora',      'admin'=>'1',]); 
                
                DB::table('representantes')->insert(['cedula'=>'10555400', 'nombre'=>'Zulirais', 'apellido'=>'Garcia', 'direccion'=>'fdfdsf',                    'telefono'=>'02815872676','rif'=>'105554001','email'=>'zuliraisg@gmail.com',   'password'=>bcrypt('zuli20'),      'pregunta'=>'como me llamo','respuesta'=>'Zuly',     'idnivel'=>'1','nombreEscuela'=>'Ideal',                   'admin'=>'0']);
                
                factory(Representante::class)->times(100)->create();
	}
}