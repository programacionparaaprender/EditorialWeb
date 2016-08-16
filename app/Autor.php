<?php namespace EditorialWeb;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model {

		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'autores';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre', 'apellido'];
	//public function propietario()
//	{
//		return $this->belongsTo('GestorImagenes\Usuario');
//	}
	public function libros()
	{
		return $this->hasMany('EditorialWeb\Libro');
	}
}
