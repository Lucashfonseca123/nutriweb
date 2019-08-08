<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimentos_taco extends Model
{
    protected $table = 'cmvcoltaco3';
    protected $casts = [
        'umidade' => 'float'
    ];
}
