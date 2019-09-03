<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cidade
 * 
 * @property int $idCidade
 * @property string $Nome
 * @property int $Paciente_idPaciente
 * 
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class Cidade extends Eloquent
{
	protected $table = 'cidade';
	protected $primaryKey = 'idCidade';
	public $timestamps = false;

	protected $casts = [
		'Paciente_idPaciente' => 'int'
	];

	protected $fillable = [
		'Nome',
		'Paciente_idPaciente'
	];

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'Paciente_idPaciente');
	}
}
