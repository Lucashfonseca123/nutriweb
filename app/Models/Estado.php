<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Estado
 * 
 * @property int $idEstado
 * @property string $Nome
 * @property int $Paciente_idPaciente
 * 
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class Estado extends Eloquent
{
	protected $table = 'estado';
	protected $primaryKey = 'idEstado';
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
