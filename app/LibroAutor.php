<?php namespace EditorialWeb;

use Illuminate\Database\Eloquent\Model;

class LibroAutor extends Model {
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'libroautores';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'idlibro', 'idautor'];
	public function libro()
	{
		return $this->belongsTo('EditorialWeb\Libro');
	}
	public function autor()
	{
		return $this->belongsTo('EditorialWeb\Autor');
	}
}
