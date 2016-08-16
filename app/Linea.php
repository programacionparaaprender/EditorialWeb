<?php namespace EditorialWeb;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model {
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lineas';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'idpedido', 'idlibro','cantidad','costo'];
	public function libro()
	{
		return $this->belongsTo('EditorialWeb\Libro');
	}
	public function pedido()
	{
		return $this->belongsTo('EditorialWeb\Pedido');
	}
}
