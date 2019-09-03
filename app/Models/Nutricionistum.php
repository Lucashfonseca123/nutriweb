<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
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
