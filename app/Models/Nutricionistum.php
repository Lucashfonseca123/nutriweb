<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 23:29:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Nutricionistum
 * 
 * @property int $idNutricionista
 * @property string $NomeNutricionista
 * @property string $SenhaNutricionista
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class Nutricionistum extends Eloquent
{
	protected $primaryKey = 'idNutricionista';
	public $timestamps = false;

	protected $fillable = [
		'NomeNutricionista',
		'SenhaNutricionista'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Nutricionista_idNutricionista');
	}
}
