<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Oct 2019 17:56:41 +0000.
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
