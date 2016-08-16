<?php namespace EditorialWeb;

use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model {
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'estadopedidos';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre'];
	//public function propietario()
//	{
//		return $this->belongsTo('GestorImagenes\Usuario');
//	}
	public function pedidos()
	{
		return $this->hasMany('EditorialWeb\Pedido');
	}
}