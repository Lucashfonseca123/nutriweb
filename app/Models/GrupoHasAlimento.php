<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 23:36:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GrupoHasAlimento
 * 
 * @property int $Grupo_id
 * @property int $Alimento_id
 * @property int $idBuscado
 * @property string $Qtde_Alimento
 * 
 * @property \App\Models\Cmvcoltaco3 $cmvcoltaco3
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
		'Alimento_id' => 'int',
		'idBuscado' => 'int'
	];

	protected $fillable = [
		'Alimento_id',
		'idBuscado',
		'Qtde_Alimento'
	];

	public function cmvcoltaco3()
	{
		return $this->belongsTo(\App\Models\Cmvcoltaco3::class, 'Alimento_id');
	}

	public function grupo()
	{
		return $this->belongsTo(\App\Models\Grupo::class, 'Grupo_id');
	}
}
