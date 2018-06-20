<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jun 2018 19:34:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pelicula
 * 
 * @property int $Id
 * @property string $NombrePelicula
 * @property int $CalificacionPelicula
 * @property int $PrecioPelicula
 * @property int $IdGenero
 * 
 * @property \App\Models\Genero $genero
 * @property \Illuminate\Database\Eloquent\Collection $arriendos
 *
 * @package App\Models
 */
class Pelicula extends Eloquent
{
	protected $table = 'pelicula';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'CalificacionPelicula' => 'int',
		'PrecioPelicula' => 'int',
		'IdGenero' => 'int'
	];

	protected $fillable = [
		'NombrePelicula',
		'CalificacionPelicula',
		'PrecioPelicula',
		'IdGenero'
	];

	public function genero()
	{
		return $this->belongsTo(\App\Models\Genero::class, 'IdGenero');
	}

	public function arriendos()
	{
		return $this->hasMany(\App\Models\Arriendo::class, 'IdPelicula');
	}
}
