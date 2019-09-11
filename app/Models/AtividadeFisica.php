<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Sep 2019 23:20:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AtividadeFisica
 * 
 * @property int $idAtividade_Fisica
 * @property int $Pratica
 * @property string $Descricao
 * @property string $TempParou
 * @property \Carbon\Carbon $HorarioInicio
 * @property \Carbon\Carbon $HorarioFinal
 * @property int $FreqSemana
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class AtividadeFisica extends Eloquent
{
	protected $table = 'atividade_fisica';
	protected $primaryKey = 'idAtividade_Fisica';
	public $timestamps = false;

	protected $casts = [
		'Pratica' => 'int',
		'FreqSemana' => 'int'
	];

	protected $dates = [
		'HorarioInicio',
		'HorarioFinal'
	];

	protected $fillable = [
		'Pratica',
		'Descricao',
		'TempParou',
		'HorarioInicio',
		'HorarioFinal',
		'FreqSemana'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Atividade_Fisica_idAtividade_Fisica');
	}
}
