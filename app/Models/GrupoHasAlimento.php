<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 26 Aug 2019 19:53:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GrupoHasAlimento
 * 
 * @property int $Grupo_id
 * @property int $Alimento_id
 * @property string $Qtde_Alimento
 * 
 * @property \App\Models\Alimento $alimento
 * @property \App\Models\Grupo $grupo
 *
 * @package App\Models
 */
class GrupoHasAlimento extends Eloquent
{
	protected $table = 'grupo_has_alimento';
	protected $primaryKey = 'Grupo_id';
	public $timestamps = false;

	protected $casts = [
		'Alimento_id' => 'int'
	];

	protected $fillable = [
		'Alimento_id',
		'Qtde_Alimento'
	];

	public function alimento()
	{
		return $this->belongsTo(\App\Models\Alimento::class, 'Alimento_id');
	}

	public function grupo()
	{
		return $this->belongsTo(\App\Models\Grupo::class, 'Grupo_id');
	}
}
