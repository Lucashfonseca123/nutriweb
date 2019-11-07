<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 07 Nov 2019 22:08:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $Nutricionista_idNutricionista
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $casts = [
		'Nutricionista_idNutricionista' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'Nutricionista_idNutricionista',
		'email_verified_at',
		'password',
		'remember_token'
	];
}
