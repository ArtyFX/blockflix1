<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jun 2018 19:34:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usuario
 * 
 * @property int $Id
 * @property string $nombreUsuario
 * @property string $perfil
 * @property string $Apellidos
 * @property string $Correo
 * @property string $passwd
 * @property int $Saldo
 * 
 * @property \Illuminate\Database\Eloquent\Collection $pagos
 *
 * @package App\Models
 */
class Usuario extends Eloquent
{
	protected $table = 'usuario';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'Saldo' => 'int'
	];

	protected $fillable = [
		'nombreUsuario',
		'perfil',
		'Apellidos',
		'Correo',
		'passwd',
		'Saldo'
	];

	public function pagos()
	{
		return $this->hasMany(\App\Models\Pago::class, 'IdUsuario');
	}
}
