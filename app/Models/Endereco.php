<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Endereco
 * 
 * @property int $idEndereco
 * @property string $Rua
 * @property int $Numero
 * @property string $Cep
 * @property string $Bairo
 * @property int $Paciente_idPaciente
 * 
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class Endereco extends Eloquent
{
	protected $table = 'endereco';
	protected $primaryKey = 'idEndereco';
	public $timestamps = false;

	protected $casts = [
		'Numero' => 'int',
		'Paciente_idPaciente' => 'int'
	];

	protected $fillable = [
		'Rua',
		'Numero',
		'Cep',
		'Bairo',
		'Paciente_idPaciente'
	];

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'Paciente_idPaciente');
	}
}
