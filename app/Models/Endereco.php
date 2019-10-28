<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 23:36:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Endereco
 * 
 * @property int $idEndereco
 * @property string $RuaEndereco
 * @property int $NumeroEndereco
 * @property string $CepEndereco
 * @property string $BairoEndereco
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
		'NumeroEndereco' => 'int'
	];

	protected $fillable = [
		'RuaEndereco',
		'NumeroEndereco',
		'CepEndereco',
		'BairoEndereco'
	];

	public function pacientes()
	{
		return $this->hasMany(\App\Models\Paciente::class, 'Endereco_idEndereco');
	}
}
