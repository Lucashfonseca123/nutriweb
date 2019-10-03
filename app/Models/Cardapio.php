<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Oct 2019 17:56:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cardapio
 * 
 * @property int $idCardapio
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $Paciente_idPaciente
 * 
 * @property \App\Models\Paciente $paciente
 * @property \Illuminate\Database\Eloquent\Collection $consulta
 * @property \Illuminate\Database\Eloquent\Collection $itemcardapios
 *
 * @package App\Models
 */
class Cardapio extends Eloquent
{
	protected $table = 'cardapio';
	protected $primaryKey = 'idCardapio';

	protected $casts = [
		'Paciente_idPaciente' => 'int'
	];

	protected $fillable = [
		'Paciente_idPaciente'
	];

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'Paciente_idPaciente');
	}

	public function consulta()
	{
		return $this->hasMany(\App\Models\Consultum::class, 'Cardapio_idCardapio');
	}

	public function itemcardapios()
	{
		return $this->hasMany(\App\Models\Itemcardapio::class, 'Cardapio_idCardapio');
	}
}
