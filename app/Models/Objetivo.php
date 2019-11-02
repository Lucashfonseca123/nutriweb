<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 02 Nov 2019 20:48:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Objetivo
 * 
 * @property int $idObjetivos
 * @property string $NomeObjetivos
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class Objetivo extends Eloquent
{
	protected $primaryKey = 'idObjetivos';
	public $timestamps = false;

	protected $fillable = [
		'NomeObjetivos'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Objetivos_idObjetivos');
	}
}
