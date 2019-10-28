<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 23:29:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cmvcoltaco3
 * 
 * @property int $id
 * @property string $categoria
 * @property string $numeroAlimento
 * @property string $descricaoAlimento
 * @property string $umidade
 * @property string $energiaKcal
 * @property string $energiaKj
 * @property string $proteina
 * @property string $lipideos
 * @property string $colesterol
 * @property string $carboidrato
 * @property string $fibraAlimentar
 * @property string $cinzas
 * @property string $calcio
 * @property string $magnesio
 * @property string $manganes
 * @property string $fosforo
 * @property string $ferro
 * @property string $sodio
 * @property string $potassio
 * @property string $cobre
 * @property string $zinco
 * @property string $retinol
 * @property string $re
 * @property string $rae
 * @property string $tiamina
 * @property string $riboflavina
 * @property string $piridoxina
 * @property string $niacina
 * @property string $vitaminaC
 * @property string $created_at
 * @property string $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $grupo_has_alimentos
 *
 * @package App\Models
 */
class Cmvcoltaco3 extends Eloquent
{
	protected $table = 'cmvcoltaco3';

	protected $fillable = [
		'categoria',
		'numeroAlimento',
		'descricaoAlimento',
		'umidade',
		'energiaKcal',
		'energiaKj',
		'proteina',
		'lipideos',
		'colesterol',
		'carboidrato',
		'fibraAlimentar',
		'cinzas',
		'calcio',
		'magnesio',
		'manganes',
		'fosforo',
		'ferro',
		'sodio',
		'potassio',
		'cobre',
		'zinco',
		'retinol',
		're',
		'rae',
		'tiamina',
		'riboflavina',
		'piridoxina',
		'niacina',
		'vitaminaC'
	];

	public function grupo_has_alimentos()
	{
		return $this->hasMany(\App\Models\GrupoHasAlimento::class, 'Alimento_id');
	}
}
