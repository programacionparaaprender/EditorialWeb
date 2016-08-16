<?php
use Illuminate\Database\Seeder;
use EditorialWeb\TipoEdicion;

class TipoEdicionesSeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		TipoEdicion::create(['nombre'=>'acéfala',      'descripcion'=>'Es aquella que no tiene portada ni título.']);
		TipoEdicion::create(['nombre'=>'anotada',      'descripcion'=>'Denominada como edición comentada, ya que suele llevar comentarios a pie de página o en los espacios existentes entre los bordes.']);
		TipoEdicion::create(['nombre'=>'artística',    'descripcion'=>'Se trata de aquella en la que se pone el acento en la expresión artística de la encuadernación, o en la composición del libro.']);
		TipoEdicion::create(['nombre'=>'bibliófilo',   'descripcion'=> 'Generalmente es la edición dedicada o apreciada por bibliófilos, se caracterizan por una pequeña tirada, o para un grupo selecto de subscriptores.']);
		TipoEdicion::create(['nombre'=>'bolsillo',     'descripcion'=>'Suelen ser de formato reducido y de coste de producción económico, por regla general al contrario que las ediciones para bibliófilos, suelen ser de grandes tiradas.']);
		TipoEdicion::create(['nombre'=>'crítica',      'descripcion'=>'En sentido amplio, es aquella que se plantea los problemas previos a la edición de una obra (búsqueda de fuentes, selección de ejemplares, selección y establecimiento de un texto...), y hace partícipe al lector de las decisiones tomadas durante el proceso de edición; en sentido estricto, se denomina "edición crítica" a la que sigue el método neolachmaniano, basado en las técnicas de Carl Lachmann para el establecimiento de un texto ideal, lo más cercano posible a la intención original del autor, mediante el cotejo de las diversas versiones de un texto.']);
		TipoEdicion::create(['nombre'=>'especial',     'descripcion'=>'Dentro de una tirada normal, se sacan algunos ejemplares que se diferencian de los demás en alguna particularidad especial que desee el editor, como puede ser una firma del autor, una mejora en la calidad.']);
		TipoEdicion::create(['nombre'=>'facsímil',     'descripcion'=>'Es aquella que reproduce la imagen (fotográfica o escaneada) del texto tal y como el editor la ha encontrado. Es una opción común sobre todo en el caso de textos antiguos, códices iluminados, manuscritos u obras especialmente valiosas. Puede reproducir el texto, los materiales de la encuadernación, o ambos.']);
		TipoEdicion::create(['nombre'=>'genética',     'descripcion'=>'Es la que muestra, simultáneamente, varios o todos los estadios en que se ha presentado un texto durante su proceso de creación y transmisión (por ejemplo, el borrador de un poema, su primera edición, su segunda edición corregida, una edición modificada para una antología, etc.)']);
		TipoEdicion::create(['nombre'=>'lujo',         'descripcion'=>'Caracterizada por la excesiva calidad de materiales empleados en la elaboración de la edición, como puede ser el papel, encuadernación, etc.']);
		TipoEdicion::create(['nombre'=>'múltiple',     'descripcion'=>'O edición sinóptica: es aquella que muestra varios textos en paralelo. Dichos textos pueden ser traducciones unos de otros (el caso más frecuente es el de las ediciones sinópticas de la Biblia), o bien versiones distintas de un mismo texto, o textos distintos que se pretende presentar en paralelo.']);
		TipoEdicion::create(['nombre'=>'numerada',     'descripcion'=>'Generalmente aquellas ediciones con impresión de grabados suele ir numerada, de tal forma que las numeraciones más bajas suelen ser más apreciadas que las de mayor numeración.']);
		TipoEdicion::create(['nombre'=>'paleográfica', 'descripcion'=>'Es la que, sin reproducir el texto en forma de imagen, sin embargo intenta describirlo con la mayor exactitud posible, dando al lector información exhaustiva sobre las grafías, las abreviaturas, los marginalia, los accidentes del texto, etc.']);
		TipoEdicion::create(['nombre'=>'papel',        'descripcion'=>'Suele ser una edición barata en la que los pliegos de papel una vez encuadernados e impresos no ha sido encuadernada.']);
		TipoEdicion::create(['nombre'=>'príncipe',     'descripcion'=>'Se denomina así a la primera edición de una obra.']);
		TipoEdicion::create(['nombre'=>'rama',         'descripcion'=>'Suele denominarse así a la edición que ha sido impresa, plegada, pero no tiene aún una encuadernación. Tipología complementaria']);
		TipoEdicion::create(['nombre'=>'abreviada',    'descripcion'=>'la que se ha compendiado de la original para adecuar a una categoría de usuarios. Por ejemplo, una edición para escolares de El Mundo es ancho y ajeno']);
		TipoEdicion::create(['nombre'=>'apócrifa',     'descripcion'=>'la que se atribuye su autoría sin serlo o saca con el mismo título sin ser el autor. Ejemplo, la 2.ª parte de Don Quijote']);
		TipoEdicion::create(['nombre'=>'bilingüe',     'descripcion'=>'La que se redacta en dos idiomas, en dos columnas o idiomas. Columna A en página par, e idioma B en página impar. Ejemplo "Análisis Matemático" de Protter']);
		TipoEdicion::create(['nombre'=>'conmemorativa','descripcion'=>'La se edita al cumplir 50 años, un siglo, etc. Ejemplo, La Colección por el Sesquicentenario de la Independencia del Perú.']);
		TipoEdicion::create(['nombre'=>'definitiva',   'descripcion'=>'La que sigue a una previa que recibe comentarios u observaciones. Ejemplo "Introducción al Álgebra" de Cotlar-Sadoski, Eudeba.']);
		TipoEdicion::create(['nombre'=>'ilustrada',    'descripcion'=>'Lleva comentarios gráficos e ilustraciones. Ejemplo Enciclopedia Ilustrada del Perú de Tauro del Pino. Edición con manuscrito de autor Para lo cual el autor escribe de puño y letra y dicho material se imprime. Ejemplo, "Teoría de la medida" de Mauro Chumpitaz de la UNI, Lima.']);
		TipoEdicion::create(['nombre'=>'masiva',       'descripcion'=>'La que se imprime para bastante público. Ejemplo los populibros de Manuel Scorza en los años 50s del siglo XX.']);
		TipoEdicion::create(['nombre'=>'mimeografiada','descripcion'=>'La escrita a máquina y se reproduce procesando con mimeógrafo. Generalmente textos de cursos o de seminarios']);
		TipoEdicion::create(['nombre'=>'oficial',      'descripcion'=>'Autorizada por un Estado que sufraga los costos. Ejemplo los libros de texto escolar y de distribución gratuita.']);
		TipoEdicion::create(['nombre'=>'previa',       'descripcion'=>'La que sale a modo de prueba, para ser mejorada con intervención de interesados y de expertos.']);
		TipoEdicion::create(['nombre'=>'privada',      'descripcion'=>'La que no se pone en venta, de pequeño tiraje y entregas selectivas.']);
		TipoEdicion::create(['nombre'=>'políglota',    'descripcion'=>'Impresa en varios idiomas. Ejemplo los diccionarios, para el caso "Diccionario comparativo de castellano, inglés, quechuas de Áncash y Ecuador".']);
		TipoEdicion::create(['nombre'=>'popular',      'descripcion'=>'Edición de bajo costo y con materiales de menor precios. Ejemplo, las que auspician los diarios de circulación nacional.1']);
		TipoEdicion::create(['nombre'=>'manuscrito',   'descripcion'=>'Para lo cual el autor escribe de puño y letra y dicho material se imprime. Ejemplo, "Teoría de la medida" de Mauro Chumpitaz de la UNI, Lima.']); 
	}
}