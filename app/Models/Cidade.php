<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 23:36:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cidade
 * 
 * @property int $idCidade
 * @property string $NomeCidade
 * 
 * @property \Illuminate\Database\Eloquent\Collection $pacientes
 *
 * @package App\Models
 */
class Cidade extends Eloquent
{
	protected $table = 'cidade';
	protected $primaryKey = 'idCidade';
	public $timestamps = false;

	protected $fillable = [
		'NomeCidade'
	];

	public function pacientes()
	{
		return $this->hasMany(\App\Models\Paciente::class, 'Cidade_idCidade');
	}
}
