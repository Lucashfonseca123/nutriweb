<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 02 Nov 2019 20:48:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Diagnostico
 * 
 * @property int $idDadosClinicos
 * @property int $Diabetes_melitusDiagnostico
 * @property int $DisplidemiaDiagnostico
 * @property int $GastriteDiagnostico
 * @property int $HepatopatiaDiagnostico
 * @property int $DepressaoDiagnostico
 * @property int $HasDiagnostico
 * @property int $CardiopataDiagnostico
 * @property int $NeoplasiaDiagnostico
 * @property int $AnsiedadeDiagnostico
 * @property int $Renite_sinusiteDiagnostico
 * @property int $IcDiagnosticoDiagnostico
 * @property int $NefropatiaDiagnostico
 * @property int $UlceraDiagnostico
 * @property int $IrritabilidadeDiagnostico
 * @property string $OutrasDiagnostico
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class Diagnostico extends Eloquent
{
	protected $table = 'diagnostico';
	protected $primaryKey = 'idDadosClinicos';
	public $timestamps = false;

	protected $casts = [
		'Diabetes_melitusDiagnostico' => 'int',
		'DisplidemiaDiagnostico' => 'int',
		'GastriteDiagnostico' => 'int',
		'HepatopatiaDiagnostico' => 'int',
		'DepressaoDiagnostico' => 'int',
		'HasDiagnostico' => 'int',
		'CardiopataDiagnostico' => 'int',
		'NeoplasiaDiagnostico' => 'int',
		'AnsiedadeDiagnostico' => 'int',
		'Renite_sinusiteDiagnostico' => 'int',
		'IcDiagnosticoDiagnostico' => 'int',
		'NefropatiaDiagnostico' => 'int',
		'UlceraDiagnostico' => 'int',
		'IrritabilidadeDiagnostico' => 'int'
	];

	protected $fillable = [
		'Diabetes_melitusDiagnostico',
		'DisplidemiaDiagnostico',
		'GastriteDiagnostico',
		'HepatopatiaDiagnostico',
		'DepressaoDiagnostico',
		'HasDiagnostico',
		'CardiopataDiagnostico',
		'NeoplasiaDiagnostico',
		'AnsiedadeDiagnostico',
		'Renite_sinusiteDiagnostico',
		'IcDiagnosticoDiagnostico',
		'NefropatiaDiagnostico',
		'UlceraDiagnostico',
		'IrritabilidadeDiagnostico',
		'OutrasDiagnostico'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Diagnostico_idDados Clinicos');
	}
}
