<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Oct 2019 17:56:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Altclinica
 * 
 * @property int $idAltClinicas
 * @property int $Cabelo_quebradico
 * @property int $Unhas_fracas
 * @property int $Palidez
 * @property string $Outros
 * @property int $HabitosIntestinal
 * @property int $Frequencia_urinaria
 * @property string $Passado_Cirurgico
 * @property string $Meidcamentos
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class Altclinica extends Eloquent
{
	protected $primaryKey = 'idAltClinicas';
	public $timestamps = false;

	protected $casts = [
		'Cabelo_quebradico' => 'int',
		'Unhas_fracas' => 'int',
		'Palidez' => 'int',
		'HabitosIntestinal' => 'int',
		'Frequencia_urinaria' => 'int'
	];

	protected $fillable = [
		'Cabelo_quebradico',
		'Unhas_fracas',
		'Palidez',
		'Outros',
		'HabitosIntestinal',
		'Frequencia_urinaria',
		'Passado_Cirurgico',
		'Meidcamentos'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'AltClinicas_idAltClinicas');
	}
}
