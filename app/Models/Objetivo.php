<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Oct 2019 17:56:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Objetivo
 * 
 * @property int $idObjetivos
 * @property string $Nome
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
		'Nome'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Objetivos_idObjetivos');
	}
}
