<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Sep 2019 23:20:05 +0000.
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
 * @property float $ConsumoAgua
 * @property string $UsouSuplem
 * @property int $CozinhaCasa
 * @property int $Cidade_idCidade
 * @property int $Estado_idEstado
 * @property int $Endereco_idEndereco
 * @property float $TrabalhaHoraDia
 * @property string $Tempo_parou
 * @property float $ConsumoMedio
 * @property int $Cigar_dia
 * @property int $Etilista
 * @property string $Desjejum
 * @property string $Lanche1
 * @property string $Almoco
 * @property string $Lanche2
 * @property string $Jantar
 * @property string $Ceia
 * @property string $Rotina
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
	protected $table = 'Paciente';
	protected $primaryKey = 'idPaciente';
	public $timestamps = false;

	protected $casts = [
		'Telefone' => 'int',
		'Tabagista' => 'int',
		'ConsumoAgua' => 'float',
		'CozinhaCasa' => 'int',
		'Cidade_idCidade' => 'int',
		'Estado_idEstado' => 'int',
		'Endereco_idEndereco' => 'int',
		'TrabalhaHoraDia' => 'float',
		'ConsumoMedio' => 'float',
		'Cigar_dia' => 'int',
		'Etilista' => 'int'
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
		'ConsumoAgua',
		'UsouSuplem',
		'CozinhaCasa',
		'Cidade_idCidade',
		'Estado_idEstado',
		'Endereco_idEndereco',
		'TrabalhaHoraDia',
		'Tempo_parou',
		'ConsumoMedio',
		'Cigar_dia',
		'Etilista',
		'Desjejum',
		'Lanche1',
		'Almoco',
		'Lanche2',
		'Jantar',
		'Ceia',
		'Rotina'
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
