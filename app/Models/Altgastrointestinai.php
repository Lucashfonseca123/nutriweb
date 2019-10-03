<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Oct 2019 17:56:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Altgastrointestinai
 * 
 * @property int $idAltGastrointestinais
 * @property int $Disfagia
 * @property int $Vomitos
 * @property int $Anorexia
 * @property int $Flatulencias
 * @property int $Pirose
 * @property int $Diarreia
 * @property int $Dispepsia
 * @property int $Polidipsia
 * @property int $Nausea
 * @property int $Constipacao
 * @property int $Edema
 * @property string $Outras
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
		'Disfagia' => 'int',
		'Vomitos' => 'int',
		'Anorexia' => 'int',
		'Flatulencias' => 'int',
		'Pirose' => 'int',
		'Diarreia' => 'int',
		'Dispepsia' => 'int',
		'Polidipsia' => 'int',
		'Nausea' => 'int',
		'Constipacao' => 'int',
		'Edema' => 'int'
	];

	protected $fillable = [
		'Disfagia',
		'Vomitos',
		'Anorexia',
		'Flatulencias',
		'Pirose',
		'Diarreia',
		'Dispepsia',
		'Polidipsia',
		'Nausea',
		'Constipacao',
		'Edema',
		'Outras'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'AltGastrointestinais_idAltGastrointestinais');
	}
}
