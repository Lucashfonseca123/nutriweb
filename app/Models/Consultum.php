<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Consultum
 * 
 * @property int $idConsulta
 * @property int $Paciente_idPaciente
 * @property int $Objetivos_idObjetivos
 * @property int $Atividade_Fisica_idAtividade_Fisica
 * @property int $Nutricionista_idNutricionista
 * @property float $Porc_gordura
 * @property float $Porc_muscular
 * @property float $Peso
 * @property float $Estatura
 * @property float $Circ_cintura
 * @property float $Circ_quadril
 * @property float $Circ_coxa_prox_esq
 * @property float $Circ_coxa_prox_dir
 * @property float $Circ_pantu
 * @property int $Tmb
 * @property int $Body_age
 * @property int $Gord_visceral
 * @property int $Cardapio_idCardapio
 * @property int $Diagnostico_idDados Clinicos
 * @property float $Circ_abdomen
 * @property float $Circ_braco_dir
 * @property float $Circ_braco_esq
 * @property float $Circ_punho
 * @property \Carbon\Carbon $Data_consulta
 * @property int $AltGastrointestinais_idAltGastrointestinais
 * @property int $AntFamiliares_idAntFamiliares
 * @property int $AltClinicas_idAltClinicas
 * 
 * @property \App\Models\Altclinica $altclinica
 * @property \App\Models\Altgastrointestinai $altgastrointestinai
 * @property \App\Models\Antfamiliare $antfamiliare
 * @property \App\Models\AtividadeFisica $atividade_fisica
 * @property \App\Models\Cardapio $cardapio
 * @property \App\Models\Diagnostico $diagnostico
 * @property \App\Models\Nutricionistum $nutricionistum
 * @property \App\Models\Objetivo $objetivo
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class Consultum extends Eloquent
{
	protected $primaryKey = 'idConsulta';
	public $timestamps = false;

	protected $casts = [
		'Paciente_idPaciente' => 'int',
		'Objetivos_idObjetivos' => 'int',
		'Atividade_Fisica_idAtividade_Fisica' => 'int',
		'Nutricionista_idNutricionista' => 'int',
		'Porc_gordura' => 'float',
		'Porc_muscular' => 'float',
		'Peso' => 'float',
		'Estatura' => 'float',
		'Circ_cintura' => 'float',
		'Circ_quadril' => 'float',
		'Circ_coxa_prox_esq' => 'float',
		'Circ_coxa_prox_dir' => 'float',
		'Circ_pantu' => 'float',
		'Tmb' => 'int',
		'Body_age' => 'int',
		'Gord_visceral' => 'int',
		'Cardapio_idCardapio' => 'int',
		'Diagnostico_idDados Clinicos' => 'int',
		'Circ_abdomen' => 'float',
		'Circ_braco_dir' => 'float',
		'Circ_braco_esq' => 'float',
		'Circ_punho' => 'float',
		'AltGastrointestinais_idAltGastrointestinais' => 'int',
		'AntFamiliares_idAntFamiliares' => 'int',
		'AltClinicas_idAltClinicas' => 'int'
	];

	protected $dates = [
		'Data_consulta'
	];

	protected $fillable = [
		'Paciente_idPaciente',
		'Objetivos_idObjetivos',
		'Atividade_Fisica_idAtividade_Fisica',
		'Nutricionista_idNutricionista',
		'Porc_gordura',
		'Porc_muscular',
		'Peso',
		'Estatura',
		'Circ_cintura',
		'Circ_quadril',
		'Circ_coxa_prox_esq',
		'Circ_coxa_prox_dir',
		'Circ_pantu',
		'Tmb',
		'Body_age',
		'Gord_visceral',
		'Cardapio_idCardapio',
		'Diagnostico_idDados Clinicos',
		'Circ_abdomen',
		'Circ_braco_dir',
		'Circ_braco_esq',
		'Circ_punho',
		'Data_consulta',
		'AltGastrointestinais_idAltGastrointestinais',
		'AntFamiliares_idAntFamiliares',
		'AltClinicas_idAltClinicas'
	];

	public function altclinica()
	{
		return $this->belongsTo(\App\Models\Altclinica::class, 'AltClinicas_idAltClinicas');
	}

	public function altgastrointestinai()
	{
		return $this->belongsTo(\App\Models\Altgastrointestinai::class, 'AltGastrointestinais_idAltGastrointestinais');
	}

	public function antfamiliare()
	{
		return $this->belongsTo(\App\Models\Antfamiliare::class, 'AntFamiliares_idAntFamiliares');
	}

	public function atividade_fisica()
	{
		return $this->belongsTo(\App\Models\AtividadeFisica::class, 'Atividade_Fisica_idAtividade_Fisica');
	}

	public function cardapio()
	{
		return $this->belongsTo(\App\Models\Cardapio::class, 'Cardapio_idCardapio');
	}

	public function diagnostico()
	{
		return $this->belongsTo(\App\Models\Diagnostico::class, 'Diagnostico_idDados Clinicos');
	}

	public function nutricionistum()
	{
		return $this->belongsTo(\App\Models\Nutricionistum::class, 'Nutricionista_idNutricionista');
	}

	public function objetivo()
	{
		return $this->belongsTo(\App\Models\Objetivo::class, 'Objetivos_idObjetivos');
	}

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'Paciente_idPaciente');
	}
}
