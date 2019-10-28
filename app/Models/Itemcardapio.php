<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 23:36:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Itemcardapio
 * 
 * @property int $IdItemCardapio
 * @property int $OpcoesItemCardapio
 * @property string $HorarioItemCardapio
 * @property int $Cardapio_idCardapio
 * @property int $Grupo_idGrupo
 * @property int $Refeicao_idRefeicao
 * 
 * @property \App\Models\Cardapio $cardapio
 * @property \App\Models\Grupo $grupo
 * @property \App\Models\Refeicao $refeicao
 *
 * @package App\Models
 */
class Itemcardapio extends Eloquent
{
	protected $table = 'itemcardapio';
	protected $primaryKey = 'IdItemCardapio';
	public $timestamps = false;

	protected $casts = [
		'OpcoesItemCardapio' => 'int',
		'Cardapio_idCardapio' => 'int',
		'Grupo_idGrupo' => 'int',
		'Refeicao_idRefeicao' => 'int'
	];

	protected $fillable = [
		'OpcoesItemCardapio',
		'HorarioItemCardapio',
		'Cardapio_idCardapio',
		'Grupo_idGrupo',
		'Refeicao_idRefeicao'
	];

	public function cardapio()
	{
		return $this->belongsTo(\App\Models\Cardapio::class, 'Cardapio_idCardapio');
	}

	public function grupo()
	{
		return $this->belongsTo(\App\Models\Grupo::class, 'Grupo_idGrupo');
	}

	public function refeicao()
	{
		return $this->belongsTo(\App\Models\Refeicao::class, 'Refeicao_idRefeicao');
	}
}
