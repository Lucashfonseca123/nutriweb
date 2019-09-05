<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Sep 2019 03:36:19 +0000.
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
 * @property string $Frequencia_urinaria
 * @property string $Alteracoes clinicascol
 * @property string $Alteracoes clinicascol1
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
		'HabitosIntestinal' => 'int'
	];

	protected $fillable = [
		'Cabelo_quebradico',
		'Unhas_fracas',
		'Palidez',
		'Outros',
		'HabitosIntestinal',
		'Frequencia_urinaria',
		'Alteracoes clinicascol',
		'Alteracoes clinicascol1'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'AltClinicas_idAltClinicas');
	}
}
