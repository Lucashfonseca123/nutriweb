<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 16 Sep 2019 17:23:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cardapio
 * 
 * @property int $idCardapio
 * @property \Carbon\Carbon $Data
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
	public $timestamps = false;

	protected $casts = [
		'Paciente_idPaciente' => 'int'
	];

	protected $dates = [
		'Data'
	];

	protected $fillable = [
		'Data',
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
