<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jun 2018 19:34:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Arriendo
 * 
 * @property int $Id
 * @property int $IdPago
 * @property \Carbon\Carbon $Fecha
 * @property int $IdPelicula
 * 
 * @property \App\Models\Pago $pago
 * @property \App\Models\Pelicula $pelicula
 *
 * @package App\Models
 */
class Arriendo extends Eloquent
{
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'IdPago' => 'int',
		'IdPelicula' => 'int'
	];

	protected $dates = [
		'Fecha'
	];

	protected $fillable = [
		'IdPago',
		'Fecha',
		'IdPelicula'
	];

	public function pago()
	{
		return $this->belongsTo(\App\Models\Pago::class, 'IdPago');
	}

	public function pelicula()
	{
		return $this->belongsTo(\App\Models\Pelicula::class, 'IdPelicula');
	}
}
