<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 17 Sep 2019 00:44:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cidade
 * 
 * @property int $idCidade
 * @property string $Nome
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
		'Nome'
	];

	public function pacientes()
	{
		return $this->hasMany(\App\Models\Paciente::class, 'Cidade_idCidade');
	}
}
