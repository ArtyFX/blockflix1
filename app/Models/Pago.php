<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jun 2018 19:34:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pago
 * 
 * @property int $Id
 * @property int $IdUsuario
 * @property int $IdMedioPago
 * @property int $Monto
 * 
 * @property \App\Models\Mediopago $mediopago
 * @property \App\Models\Usuario $usuario
 * @property \Illuminate\Database\Eloquent\Collection $arriendos
 *
 * @package App\Models
 */
class Pago extends Eloquent
{
	protected $table = 'pago';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'IdUsuario' => 'int',
		'IdMedioPago' => 'int',
		'Monto' => 'int'
	];

	protected $fillable = [
		'IdUsuario',
		'IdMedioPago',
		'Monto'
	];

	public function mediopago()
	{
		return $this->belongsTo(\App\Models\Mediopago::class, 'IdMedioPago');
	}

	public function usuario()
	{
		return $this->belongsTo(\App\Models\Usuario::class, 'IdUsuario');
	}

	public function arriendos()
	{
		return $this->hasMany(\App\Models\Arriendo::class, 'IdPago');
	}
}
