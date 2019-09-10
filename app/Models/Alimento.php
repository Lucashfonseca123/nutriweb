<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Sep 2019 23:20:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Alimento
 * 
 * @property int $idAlimento
 * @property string $Nome
 * 
 * @property \Illuminate\Database\Eloquent\Collection $grupos
 *
 * @package App\Models
 */
class Alimento extends Eloquent
{
	protected $table = 'alimento';
	protected $primaryKey = 'idAlimento';
	public $timestamps = false;

	protected $fillable = [
		'Nome'
	];

	public function grupos()
	{
		return $this->belongsToMany(\App\Models\Grupo::class, 'grupo_has_alimento', 'Alimento_id', 'Grupo_id')
					->withPivot('Qtde_Alimento');
	}
}
