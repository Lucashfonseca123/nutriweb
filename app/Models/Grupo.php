<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 21 Oct 2019 18:22:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Grupo
 * 
 * @property int $idGrupo
 * @property string $NomeGrupo
 * 
 * @property \App\Models\GrupoHasAlimento $grupo_has_alimento
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

	public function grupo_has_alimento()
	{
		return $this->hasOne(\App\Models\GrupoHasAlimento::class, 'Grupo_id');
	}

	public function itemcardapios()
	{
		return $this->hasMany(\App\Models\Itemcardapio::class, 'Grupo_idGrupo');
	}
}
