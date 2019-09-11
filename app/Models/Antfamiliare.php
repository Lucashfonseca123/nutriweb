<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Sep 2019 23:20:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Antfamiliare
 * 
 * @property int $idAntFamiliares
 * @property int $Diabetes_melitus
 * @property int $Dislipedemia
 * @property int $Hepatopatia
 * @property int $Has
 * @property int $Cardiopatia
 * @property int $Cancer
 * @property int $Avc
 * @property int $Nefropatia
 * @property int $Obesidade
 * @property string $Outras
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
		'Diabetes_melitus' => 'int',
		'Dislipedemia' => 'int',
		'Hepatopatia' => 'int',
		'Has' => 'int',
		'Cardiopatia' => 'int',
		'Cancer' => 'int',
		'Avc' => 'int',
		'Nefropatia' => 'int',
		'Obesidade' => 'int'
	];

	protected $fillable = [
		'Diabetes_melitus',
		'Dislipedemia',
		'Hepatopatia',
		'Has',
		'Cardiopatia',
		'Cancer',
		'Avc',
		'Nefropatia',
		'Obesidade',
		'Outras'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'AntFamiliares_idAntFamiliares');
	}
}
