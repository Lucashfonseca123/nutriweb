<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Sep 2019 23:20:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Diagnostico
 * 
 * @property int $idDadosClinicos
 * @property int $Diabetes_melitus
 * @property int $Displidemia
 * @property int $Gastrite
 * @property int $Hepatopatia
 * @property int $Depressao
 * @property int $Has
 * @property int $Cardiopata
 * @property int $Neoplasia
 * @property int $Ansiedade
 * @property int $Renite_sinusite
 * @property int $Ic
 * @property int $Nefropatia
 * @property int $Ulcera
 * @property int $Irritabilidade
 * @property string $Outras
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
		'Diabetes_melitus' => 'int',
		'Displidemia' => 'int',
		'Gastrite' => 'int',
		'Hepatopatia' => 'int',
		'Depressao' => 'int',
		'Has' => 'int',
		'Cardiopata' => 'int',
		'Neoplasia' => 'int',
		'Ansiedade' => 'int',
		'Renite_sinusite' => 'int',
		'Ic' => 'int',
		'Nefropatia' => 'int',
		'Ulcera' => 'int',
		'Irritabilidade' => 'int'
	];

	protected $fillable = [
		'Diabetes_melitus',
		'Displidemia',
		'Gastrite',
		'Hepatopatia',
		'Depressao',
		'Has',
		'Cardiopata',
		'Neoplasia',
		'Ansiedade',
		'Renite_sinusite',
		'Ic',
		'Nefropatia',
		'Ulcera',
		'Irritabilidade',
		'Outras'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Diagnostico_idDados Clinicos');
	}
}
