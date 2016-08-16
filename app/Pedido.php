<?php namespace EditorialWeb;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pedidos';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'idrepresentante', 'fecha','total','idestado'];
	public function lineas()
	{
		return $this->hasMany('EditorialWeb\Linea');
	}
        public function estadopedido()
	{
		return $this->belongsTo('EditorialWeb\EstadoPedido');
	}
}
