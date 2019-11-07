<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 07 Nov 2019 22:08:15 +0000.
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
 * @property float $Porc_gorduraConsulta
 * @property float $Porc_muscularConsulta
 * @property float $PesoConsulta
 * @property float $EstaturaConsulta
 * @property float $Circ_cinturaConsulta
 * @property float $Circ_quadrilConsulta
 * @property float $Circ_coxa_prox_esqConsulta
 * @property float $Circ_coxa_prox_dirConsulta
 * @property float $Circ_pantuConsulta
 * @property int $TmbConsulta
 * @property int $Body_ageConsulta
 * @property int $Gord_visceralConsulta
 * @property int $Cardapio_idCardapio
 * @property int $Diagnostico_idDados Clinicos
 * @property float $Circ_abdomenConsulta
 * @property float $Circ_braco_dirConsulta
 * @property float $Circ_braco_esqConsulta
 * @property float $Circ_punhoConsulta
 * @property \Carbon\Carbon $Data_consultaConsulta
 * @property int $AltGastrointestinais_idAltGastrointestinais
 * @property int $AntFamiliares_idAntFamiliares
 * @property int $AltClinicas_idAltClinicas
 * @property int $AlteracaoConsulta
 * @property int $PrimeiraConsulta
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
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

	protected $casts = [
		'Paciente_idPaciente' => 'int',
		'Objetivos_idObjetivos' => 'int',
		'Atividade_Fisica_idAtividade_Fisica' => 'int',
		'Nutricionista_idNutricionista' => 'int',
		'Porc_gorduraConsulta' => 'float',
		'Porc_muscularConsulta' => 'float',
		'PesoConsulta' => 'float',
		'EstaturaConsulta' => 'float',
		'Circ_cinturaConsulta' => 'float',
		'Circ_quadrilConsulta' => 'float',
		'Circ_coxa_prox_esqConsulta' => 'float',
		'Circ_coxa_prox_dirConsulta' => 'float',
		'Circ_pantuConsulta' => 'float',
		'TmbConsulta' => 'int',
		'Body_ageConsulta' => 'int',
		'Gord_visceralConsulta' => 'int',
		'Cardapio_idCardapio' => 'int',
		'Diagnostico_idDados Clinicos' => 'int',
		'Circ_abdomenConsulta' => 'float',
		'Circ_braco_dirConsulta' => 'float',
		'Circ_braco_esqConsulta' => 'float',
		'Circ_punhoConsulta' => 'float',
		'AltGastrointestinais_idAltGastrointestinais' => 'int',
		'AntFamiliares_idAntFamiliares' => 'int',
		'AltClinicas_idAltClinicas' => 'int',
		'AlteracaoConsulta' => 'int',
		'PrimeiraConsulta' => 'int'
	];

	protected $dates = [
		'Data_consultaConsulta'
	];

	protected $fillable = [
		'Paciente_idPaciente',
		'Objetivos_idObjetivos',
		'Atividade_Fisica_idAtividade_Fisica',
		'Nutricionista_idNutricionista',
		'Porc_gorduraConsulta',
		'Porc_muscularConsulta',
		'PesoConsulta',
		'EstaturaConsulta',
		'Circ_cinturaConsulta',
		'Circ_quadrilConsulta',
		'Circ_coxa_prox_esqConsulta',
		'Circ_coxa_prox_dirConsulta',
		'Circ_pantuConsulta',
		'TmbConsulta',
		'Body_ageConsulta',
		'Gord_visceralConsulta',
		'Cardapio_idCardapio',
		'Diagnostico_idDados Clinicos',
		'Circ_abdomenConsulta',
		'Circ_braco_dirConsulta',
		'Circ_braco_esqConsulta',
		'Circ_punhoConsulta',
		'Data_consultaConsulta',
		'AltGastrointestinais_idAltGastrointestinais',
		'AntFamiliares_idAntFamiliares',
		'AltClinicas_idAltClinicas',
		'AlteracaoConsulta',
		'PrimeiraConsulta'
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
