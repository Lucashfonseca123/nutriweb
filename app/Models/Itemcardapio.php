<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 Oct 2019 14:57:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Itemcardapio
 * 
 * @property int $IdItemCardapio
 * @property int $Opcoes
 * @property string $Horario
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
		'Opcoes' => 'int',
		'Cardapio_idCardapio' => 'int',
		'Grupo_idGrupo' => 'int',
		'Refeicao_idRefeicao' => 'int'
	];

	protected $fillable = [
		'Opcoes',
		'Horario',
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
