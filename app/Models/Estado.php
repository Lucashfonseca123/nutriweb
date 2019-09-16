<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 16 Sep 2019 17:23:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Estado
 * 
 * @property int $idEstado
 * @property string $Nome
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
		'Nome'
	];

	public function pacientes()
	{
		return $this->hasMany(\App\Models\Paciente::class, 'Estado_idEstado');
	}
}
