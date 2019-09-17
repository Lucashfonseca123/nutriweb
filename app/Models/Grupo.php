<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Sep 2019 23:20:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
  
/**
 * Class Grupo
 * 
 * @property int $idGrupo
 * @property string $Nome
 * 
 * @property \Illuminate\Database\Eloquent\Collection $alimentos
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
		'Nome'
	];

	public function alimentos()
	{
		return $this->belongsToMany(\App\Models\Alimento::class, 'grupo_has_alimento', 'Grupo_id', 'Alimento_id')
					->withPivot('Qtde_Alimento');
	}

	public function itemcardapios()
	{
		return $this->hasMany(\App\Models\Itemcardapio::class, 'Grupo_idGrupo');
	}
}
