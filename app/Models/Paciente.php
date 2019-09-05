<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Sep 2019 03:36:19 +0000.
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
 * @property int $Cidade_idCidade
 * @property int $Estado_idEstado
 * @property int $Endereco_idEndereco
 * @property float $TrabalhaHoraDia
 * 
 * @property \App\Models\Cidade $cidade
 * @property \App\Models\Endereco $endereco
 * @property \App\Models\Estado $estado
 * @property \Illuminate\Database\Eloquent\Collection $cardapios
 * @property \Illuminate\Database\Eloquent\Collection $consulta
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
		'Cidade_idCidade' => 'int',
		'Estado_idEstado' => 'int',
		'Endereco_idEndereco' => 'int',
		'TrabalhaHoraDia' => 'float'
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
		'Cidade_idCidade',
		'Estado_idEstado',
		'Endereco_idEndereco',
		'TrabalhaHoraDia'
	];

	public function cidade()
	{
		return $this->belongsTo(\App\Models\Cidade::class, 'Cidade_idCidade');
	}

	public function endereco()
	{
		return $this->belongsTo(\App\Models\Endereco::class, 'Endereco_idEndereco');
	}

	public function estado()
	{
		return $this->belongsTo(\App\Models\Estado::class, 'Estado_idEstado');
	}

	public function cardapios()
	{
		return $this->hasMany(\App\Models\Cardapio::class, 'Paciente_idPaciente');
	}

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Paciente_idPaciente');
	}
}
