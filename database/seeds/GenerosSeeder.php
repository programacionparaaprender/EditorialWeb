<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use EditorialWeb\Genero;

class GenerosSeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Genero::create(['nombre'=>'artístico',       'descripcion'=>'la especialización temática en que se suelen dividir las diversas artes.']);
		Genero::create(['nombre'=>'cinematográfico', 'descripcion'=>'tema general de una película que sirve para su clasificación.']);
		Genero::create(['nombre'=>'gramatical',      'descripcion'=>'un sistema de clasificación nominal que poseen algunas lenguas.']);
		Genero::create(['nombre'=>'historietístico', 'descripcion'=>'que en las historietas es un modelo de estructuración formal y temática que se ofrece como esquema previo a la creación de estas, además de servir para su clasificación, distribución y venta.']);
		Genero::create(['nombre'=>'literario',       'descripcion'=>'el sistema que permite la clasificación de obras literarias de acuerdo a diversos criterios.']);
		Genero::create(['nombre'=> 'musical',        'descripcion'=>'una categoría que reúne composiciones musicales que comparten distintos criterios de afinidad.']);
		Genero::create(['nombre'=>'videojuegos',     'descripcion'=>'que designa un conjunto de estos que poseen una serie de elementos comunes.']);
		Genero::create(['nombre'=>'Escena de género','descripcion'=>'un tipo de obra artística, principalmente pictórica, en la que se representa a personas normales en escenas cotidianas, contemporáneas al autor.']);
		Genero::create(['nombre'=>'biología',        'descripcion'=>'como la categoría taxonómica inmediatamente superior a la especie e inferior a la familia.']);
		Genero::create(['nombre'=> 'humano',         'descripcion'=> 'como sinónimo de la especie humana.']);
		Genero::create(['nombre'=>'matemáticas',     'descripcion'=>'que en topología hace referencia a una propiedad de invariancia de los objetos considerados y que en términos muy generales, puede interpretarse como el número de agujeros de una superficie.']);
		Genero::create(['nombre'=>'lógico',          'descripcion'=> 'Concepto que reúne la multiplicidad de individuos en una unidad conceptual. A su vez estos conceptos pueden agruparse en unidades conceptuales de nivel superior. Tradicionalmente el primer nivel suele denominarse especie y los niveles superiores géneros, siendo el Ser el género lógico supremo que reúne en sí la totalidad.1']);
		Genero::create(['nombre'=>'sociología',      'descripcion'=>'como conjunto de características usadas en sociedad para distinguir entre masculinidad y feminidad, características tales como el sexo biológico, estructuras sociales basadas en el sexo (rol de género) y la propia identidad de género del sujeto.']);
		Genero::create(['nombre'=>'informatica',     'descripcion'=>'Todo lo referente a la creación de programas para dispositivos con Sistemas Operativos, y todo lo referente a los computadores']); 
		Genero::create(['nombre'=>'fisica',          'descripcion'=>'La física es la ciencia natural que estudia las propiedades, el comportamiento de la energía, la materia (como también cualquier cambio en ella que no altere la naturaleza de la misma), así como el tiempo, el espacio y las interacciones de estos cuatro conceptos entre sí.']); 
	}
}