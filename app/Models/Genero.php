<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jun 2018 19:34:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Genero
 * 
 * @property int $Id
 * @property string $NombreGenero
 * 
 * @property \Illuminate\Database\Eloquent\Collection $peliculas
 *
 * @package App\Models
 */
class Genero extends Eloquent
{
	protected $table = 'genero';
	protected $primaryKey = 'Id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id' => 'int'
	];

	protected $fillable = [
		'NombreGenero'
	];

	public function peliculas()
	{
		return $this->hasMany(\App\Models\Pelicula::class, 'IdGenero');
	}
}
