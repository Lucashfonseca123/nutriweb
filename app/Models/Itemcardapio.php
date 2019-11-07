<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 07 Nov 2019 22:08:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Itemcardapio
 * 
 * @property int $IdItemCardapio
 * @property int $OpcoesItemCardapio
 * @property int $OpcoesItemCardapio2
 * @property string $HorarioItemCardapio
 * @property int $Cardapio_idCardapio
 * @property int $Grupo_idGrupo
 * @property int $Grupo_idGrupo2
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
		'OpcoesItemCardapio2' => 'int',
		'Cardapio_idCardapio' => 'int',
		'Grupo_idGrupo' => 'int',
		'Grupo_idGrupo2' => 'int',
		'Refeicao_idRefeicao' => 'int'
	];

	protected $fillable = [
		'OpcoesItemCardapio',
		'OpcoesItemCardapio2',
		'HorarioItemCardapio',
		'Cardapio_idCardapio',
		'Grupo_idGrupo',
		'Grupo_idGrupo2',
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


	public function grupo2()
    {
        return $this->belongsTo(\App\Models\Grupo::class, 'Grupo_idGrupo2');
    }

}
