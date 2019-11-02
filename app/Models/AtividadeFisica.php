<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 02 Nov 2019 20:48:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AtividadeFisica
 * 
 * @property int $idAtividade_Fisica
 * @property int $PraticaAtividade_Fisica
 * @property string $DescricaoAtividade_Fisica
 * @property string $TempParouAtividade_Fisica
 * @property string $HorarioInicioAtividade_Fisica
 * @property string $HorarioFinalAtividade_Fisica
 * @property int $FreqSemanaAtividade_Fisica
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
		'PraticaAtividade_Fisica' => 'int',
		'FreqSemanaAtividade_Fisica' => 'int'
	];

	protected $fillable = [
		'PraticaAtividade_Fisica',
		'DescricaoAtividade_Fisica',
		'TempParouAtividade_Fisica',
		'HorarioInicioAtividade_Fisica',
		'HorarioFinalAtividade_Fisica',
		'FreqSemanaAtividade_Fisica'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Atividade_Fisica_idAtividade_Fisica');
	}
}
