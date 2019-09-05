<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Sep 2019 03:36:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Nutricionistum
 * 
 * @property int $idNutricionista
 * @property string $Nome
 * @property string $Senha
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
		'Nome',
		'Senha'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Nutricionista_idNutricionista');
	}
}
