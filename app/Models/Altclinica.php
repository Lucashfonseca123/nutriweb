<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 07 Nov 2019 22:08:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Altclinica
 * 
 * @property int $idAltClinicas
 * @property int $Cabelo_quebradicoAltCinicas
 * @property int $Unhas_fracasAltCinicas
 * @property int $PalidezAltCinicas
 * @property string $OutrosAltCinicas
 * @property int $HabitosIntestinalAltCinicas
 * @property int $Frequencia_urinariaAltCinicas
 * @property string $Passado_CirurgicoAltCinicas
 * @property string $MedicamentosAltCinicas
 * 
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 *
 * @package App\Models
 */
class Altclinica extends Eloquent
{
	protected $primaryKey = 'idAltClinicas';
	public $timestamps = false;

	protected $casts = [
		'Cabelo_quebradicoAltCinicas' => 'int',
		'Unhas_fracasAltCinicas' => 'int',
		'PalidezAltCinicas' => 'int',
		'HabitosIntestinalAltCinicas' => 'int',
		'Frequencia_urinariaAltCinicas' => 'int'
	];

	protected $fillable = [
		'Cabelo_quebradicoAltCinicas',
		'Unhas_fracasAltCinicas',
		'PalidezAltCinicas',
		'OutrosAltCinicas',
		'HabitosIntestinalAltCinicas',
		'Frequencia_urinariaAltCinicas',
		'Passado_CirurgicoAltCinicas',
		'MedicamentosAltCinicas'
	];

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'AltClinicas_idAltClinicas');
	}
}
