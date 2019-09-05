<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Sep 2019 03:36:19 +0000.
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
 * 
 * @property \Illuminate\Database\Eloquent\Collection $pacientes
 *
 * @package App\Models
 */
class Endereco extends Eloquent
{
	protected $table = 'endereco';
	protected $primaryKey = 'idEndereco';
	public $timestamps = false;

	protected $casts = [
		'Numero' => 'int'
	];

	protected $fillable = [
		'Rua',
		'Numero',
		'Cep',
		'Bairo'
	];

	public function pacientes()
	{
		return $this->hasMany(\App\Models\Paciente::class, 'Endereco_idEndereco');
	}
}
