<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Sep 2019 03:36:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Objetivo
 * 
 * @property int $idObjetivos
 * @property string $Nome
 * @property string $Descricao
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
		'Nome',
		'Descricao'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Objetivos_idObjetivos');
	}
}
