<?php namespace EditorialWeb;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Representante extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'representantes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = ['id','cedula', 'nombre','apellido','direccion','telefono','rif', 'email', 'password','pregunta', 'respuesta','idnivel','nombreEscuela'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $hidden = ['password', 'remember_token'];

	public function nivel()
	{
		return $this->belongsTo('EditorialWeb\Nivel');
	}
}
