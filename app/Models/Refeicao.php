<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 16 Sep 2019 17:23:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Refeicao
 * 
 * @property int $idRefeicao
 * @property string $Descricao
 * @property \Carbon\Carbon $Horario
 * 
 * @property \Illuminate\Database\Eloquent\Collection $itemcardapios
 *
 * @package App\Models
 */
class Refeicao extends Eloquent
{
	protected $table = 'refeicao';
	protected $primaryKey = 'idRefeicao';
	public $timestamps = false;

	protected $dates = [
		'Horario'
	];

	protected $fillable = [
		'Descricao',
		'Horario'
	];

	public function itemcardapios()
	{
		return $this->hasMany(\App\Models\Itemcardapio::class, 'Refeicao_idRefeicao');
	}
}
