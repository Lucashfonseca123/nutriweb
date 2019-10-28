<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 23:36:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Altgastrointestinai
 * 
 * @property int $idAltGastrointestinais
 * @property int $DisfagiaAltGastrointestinais
 * @property int $VomitosAltGastrointestinais
 * @property int $AnorexiaAltGastrointestinais
 * @property int $FlatulenciasAltGastrointestinais
 * @property int $PiroseAltGastrointestinais
 * @property int $DiarreiaAltGastrointestinais
 * @property int $DispepsiaAltGastrointestinais
 * @property int $PolidipsiaAltGastrointestinais
 * @property int $NauseaAltGastrointestinais
 * @property int $ConstipacaoAltGastrointestinais
 * @property int $EdemaAltGastrointestinais
 * @property string $OutrasAltGastrointestinais
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class Altgastrointestinai extends Eloquent
{
	protected $primaryKey = 'idAltGastrointestinais';
	public $timestamps = false;

	protected $casts = [
		'DisfagiaAltGastrointestinais' => 'int',
		'VomitosAltGastrointestinais' => 'int',
		'AnorexiaAltGastrointestinais' => 'int',
		'FlatulenciasAltGastrointestinais' => 'int',
		'PiroseAltGastrointestinais' => 'int',
		'DiarreiaAltGastrointestinais' => 'int',
		'DispepsiaAltGastrointestinais' => 'int',
		'PolidipsiaAltGastrointestinais' => 'int',
		'NauseaAltGastrointestinais' => 'int',
		'ConstipacaoAltGastrointestinais' => 'int',
		'EdemaAltGastrointestinais' => 'int'
	];

	protected $fillable = [
		'DisfagiaAltGastrointestinais',
		'VomitosAltGastrointestinais',
		'AnorexiaAltGastrointestinais',
		'FlatulenciasAltGastrointestinais',
		'PiroseAltGastrointestinais',
		'DiarreiaAltGastrointestinais',
		'DispepsiaAltGastrointestinais',
		'PolidipsiaAltGastrointestinais',
		'NauseaAltGastrointestinais',
		'ConstipacaoAltGastrointestinais',
		'EdemaAltGastrointestinais',
		'OutrasAltGastrointestinais'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'AltGastrointestinais_idAltGastrointestinais');
	}
}
