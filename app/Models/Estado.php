<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 02 Nov 2019 20:48:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Estado
 * 
 * @property int $idEstado
 * @property string $NomeEstado
 * 
 * @property \Illuminate\Database\Eloquent\Collection $pacientes
 *
 * @package App\Models
 */
class Estado extends Eloquent
{
	protected $table = 'estado';
	protected $primaryKey = 'idEstado';
	public $timestamps = false;

	protected $fillable = [
		'NomeEstado'
	];

	public function pacientes()
	{
		return $this->hasMany(\App\Models\Paciente::class, 'Estado_idEstado');
	}
}
