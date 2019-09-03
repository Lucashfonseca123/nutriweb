<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Paciente
 * 
 * @property int $idPaciente
 * @property string $Nome
 * @property int $Telefone
 * @property string $Email
 * @property string $Sexo
 * @property \Carbon\Carbon $DataDeNascimento
 * @property string $Endereco
 * @property string $Profissao
 * @property string $IntoleranciaAlimentar
 * @property string $Mastigacao
 * @property string $Apetite
 * @property string $PrefAlimentares
 * @property string $AversaoAlimentar
 * @property int $Tabagista
 * @property string $Etilista
 * @property float $ConsumoAgua
 * @property string $UsouSuplem
 * @property string $CozinhaCasa
 * @property int $Estado_idEstado
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cardapios
 * @property \Illuminate\Database\Eloquent\Collection $cidades
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 * @property \Illuminate\Database\Eloquent\Collection $enderecos
 * @property \Illuminate\Database\Eloquent\Collection $estados
 *
 * @package App\Models
 */
class Paciente extends Eloquent
{
	protected $table = 'paciente';
	protected $primaryKey = 'idPaciente';
	public $timestamps = false;

	protected $casts = [
		'Telefone' => 'int',
		'Tabagista' => 'int',
		'ConsumoAgua' => 'float',
		'Estado_idEstado' => 'int'
	];

	protected $dates = [
		'DataDeNascimento'
	];

	protected $fillable = [
		'Nome',
		'Telefone',
		'Email',
		'Sexo',
		'DataDeNascimento',
		'Endereco',
		'Profissao',
		'IntoleranciaAlimentar',
		'Mastigacao',
		'Apetite',
		'PrefAlimentares',
		'AversaoAlimentar',
		'Tabagista',
		'Etilista',
		'ConsumoAgua',
		'UsouSuplem',
		'CozinhaCasa',
		'Estado_idEstado'
	];

	public function cardapios()
	{
		return $this->hasMany(\App\Models\Cardapio::class, 'Paciente_idPaciente');
	}

	public function cidades()
	{
		return $this->hasMany(\App\Models\Cidade::class, 'Paciente_idPaciente');
	}

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Paciente_idPaciente');
	}

	public function enderecos()
	{
		return $this->hasMany(\App\Models\Endereco::class, 'Paciente_idPaciente');
	}

	public function estados()
	{
		return $this->hasMany(\App\Models\Estado::class, 'Paciente_idPaciente');
	}
}
