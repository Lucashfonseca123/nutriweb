<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 21 Oct 2019 18:22:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Paciente
 * 
 * @property int $idPaciente
 * @property string $NomePaciente
 * @property string $TelefonePaciente
 * @property string $EmailPaciente
 * @property string $SexoPaciente
 * @property \Carbon\Carbon $DataDeNascimentoPaciente
 * @property string $ProfissaoPaciente
 * @property string $IntoleranciaAlimentarPaciente
 * @property string $MastigacaoPaciente
 * @property string $PrefAlimentaresPaciente
 * @property string $AversaoAlimentarPaciente
 * @property int $TabagistaPaciente
 * @property float $ConsumoAguaPaciente
 * @property string $UsouSuplemPaciente
 * @property string $CozinhaCasaPaciente
 * @property string $Tempo_parouPaciente
 * @property int $Cidade_idCidade
 * @property int $Estado_idEstado
 * @property int $Endereco_idEndereco
 * @property float $TrabalhaHoraDiaPaciente
 * @property float $ConsumoMedioPaciente
 * @property int $Cigar_diaPaciente
 * @property int $EtilistaPaciente
 * @property string $DesjejumPaciente
 * @property string $Lanche1Paciente
 * @property string $AlmocoPaciente
 * @property string $Lanche2Paciente
 * @property string $JantarPaciente
 * @property string $CeiaPaciente
 * @property string $RotinaPaciente
 * @property int $ExcluidoPaciente
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
		'TabagistaPaciente' => 'int',
		'ConsumoAguaPaciente' => 'float',
		'Cidade_idCidade' => 'int',
		'Estado_idEstado' => 'int',
		'Endereco_idEndereco' => 'int',
		'TrabalhaHoraDiaPaciente' => 'float',
		'ConsumoMedioPaciente' => 'float',
		'Cigar_diaPaciente' => 'int',
		'EtilistaPaciente' => 'int',
		'ExcluidoPaciente' => 'int'
	];

	protected $dates = [
		'DataDeNascimentoPaciente'
	];

	protected $fillable = [
		'NomePaciente',
		'TelefonePaciente',
		'EmailPaciente',
		'SexoPaciente',
		'DataDeNascimentoPaciente',
		'ProfissaoPaciente',
		'IntoleranciaAlimentarPaciente',
		'MastigacaoPaciente',
		'PrefAlimentaresPaciente',
		'AversaoAlimentarPaciente',
		'TabagistaPaciente',
		'ConsumoAguaPaciente',
		'UsouSuplemPaciente',
		'CozinhaCasaPaciente',
		'Tempo_parouPaciente',
		'Cidade_idCidade',
		'Estado_idEstado',
		'Endereco_idEndereco',
		'TrabalhaHoraDiaPaciente',
		'ConsumoMedioPaciente',
		'Cigar_diaPaciente',
		'EtilistaPaciente',
		'DesjejumPaciente',
		'Lanche1Paciente',
		'AlmocoPaciente',
		'Lanche2Paciente',
		'JantarPaciente',
		'CeiaPaciente',
		'RotinaPaciente',
		'ExcluidoPaciente'
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
