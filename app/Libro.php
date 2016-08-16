<?php namespace EditorialWeb;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model {

		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'libros';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre', 'año','idgenero','idtipoed','cantpagina','edicion','idnivel','descripcion','cantidad','ruta','precio'];
	//public function propietario()
//	{
//		return $this->belongsTo('GestorImagenes\Usuario');
//	}

	public function lineas()
	{
		return $this->hasMany('EditorialWeb\Linea');
	}
	public function libroautores()
	{
		return $this->hasMany('EditorialWeb\LibroAutor');
	}
	public function nivel()
	{
		return $this->belongsTo('EditorialWeb\Linea');
	}
	public function genero()
	{
		return $this->belongsTo('EditorialWeb\Genero');
	}
	public function tipoedicion()
	{
		return $this->belongsTo('EditorialWeb\TipoEdicion');
	}
}
