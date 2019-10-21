<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 21 Oct 2019 18:22:08 +0000.
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
