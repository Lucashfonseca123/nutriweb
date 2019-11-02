<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 02 Nov 2019 20:48:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Antfamiliare
 * 
 * @property int $idAntFamiliares
 * @property int $Diabetes_melitusAntFamiliares
 * @property int $DislipedemiaAntFamiliares
 * @property int $HepatopatiaAntFamiliares
 * @property int $HasAntFamiliares
 * @property int $CardiopatiaAntFamiliares
 * @property int $CancerAntFamiliares
 * @property int $AvcAntFamiliares
 * @property int $NefropatiaAntFamiliares
 * @property int $ObesidadeAntFamiliares
 * @property string $OutrasAntFamiliares
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class Antfamiliare extends Eloquent
{
	protected $primaryKey = 'idAntFamiliares';
	public $timestamps = false;

	protected $casts = [
		'Diabetes_melitusAntFamiliares' => 'int',
		'DislipedemiaAntFamiliares' => 'int',
		'HepatopatiaAntFamiliares' => 'int',
		'HasAntFamiliares' => 'int',
		'CardiopatiaAntFamiliares' => 'int',
		'CancerAntFamiliares' => 'int',
		'AvcAntFamiliares' => 'int',
		'NefropatiaAntFamiliares' => 'int',
		'ObesidadeAntFamiliares' => 'int'
	];

	protected $fillable = [
		'Diabetes_melitusAntFamiliares',
		'DislipedemiaAntFamiliares',
		'HepatopatiaAntFamiliares',
		'HasAntFamiliares',
		'CardiopatiaAntFamiliares',
		'CancerAntFamiliares',
		'AvcAntFamiliares',
		'NefropatiaAntFamiliares',
		'ObesidadeAntFamiliares',
		'OutrasAntFamiliares'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'AntFamiliares_idAntFamiliares');
	}
}
