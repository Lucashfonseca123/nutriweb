<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 07 Nov 2019 22:08:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AtividadeFisica
 * 
 * @property int $idAtividade_Fisica
 * @property int $PraticaAtividade_Fisica
 * @property string $DescricaoAtividade_Fisica
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
		'PraticaAtividade_Fisica' => 'int'
	];

	protected $fillable = [
		'PraticaAtividade_Fisica',
		'DescricaoAtividade_Fisica'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Atividade_Fisica_idAtividade_Fisica');
	}
}
