<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jun 2018 19:34:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mediopago
 * 
 * @property int $Id
 * @property string $NombreMedioPago
 * 
 * @property \Illuminate\Database\Eloquent\Collection $pagos
 *
 * @package App\Models
 */
class Mediopago extends Eloquent
{
	protected $table = 'mediopago';
	protected $primaryKey = 'Id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id' => 'int'
	];

	protected $fillable = [
		'NombreMedioPago'
	];

	public function pagos()
	{
		return $this->hasMany(\App\Models\Pago::class, 'IdMedioPago');
	}
}
