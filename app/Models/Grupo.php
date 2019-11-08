<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 07 Nov 2019 22:08:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Grupo
 * 
 * @property int $idGrupo
 * @property string $NomeGrupo
 * 
 * @property \Illuminate\Database\Eloquent\Collection $grupo_has_alimentos
 * @property \Illuminate\Database\Eloquent\Collection $itemcardapios
 *
 * @package App\Models
 */
class Grupo extends Eloquent
{
	protected $table = 'grupo';
	protected $primaryKey = 'idGrupo';
	public $timestamps = false;

	protected $fillable = [
		'NomeGrupo'
	];

	public function grupo_has_alimentos()
	{
		return $this->hasMany(\App\Models\GrupoHasAlimento::class, 'idBuscado');
	}

	public function itemcardapios()
	{
		return $this->hasMany(\App\Models\Itemcardapio::class, 'Grupo_idGrupo');
	}
}
