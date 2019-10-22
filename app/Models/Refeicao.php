<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 21 Oct 2019 18:22:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Refeicao
 * 
 * @property int $idRefeicao
 * @property string $DescricaoRefeicao
 * @property string $HorarioRefeicao
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

	protected $fillable = [
		'DescricaoRefeicao',
		'HorarioRefeicao'
	];

	public function itemcardapios()
	{
		return $this->hasMany(\App\Models\Itemcardapio::class, 'Refeicao_idRefeicao');
	}
}
