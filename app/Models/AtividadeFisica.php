<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AtividadeFisica
 * 
 * @property int $idAtividade_Fisica
 * @property string $Nome
 * @property string $Descricao
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

	protected $fillable = [
		'Nome',
		'Descricao'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Atividade_Fisica_idAtividade_Fisica');
	}
}
