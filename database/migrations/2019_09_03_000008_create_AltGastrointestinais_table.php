<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltgastrointestinaisTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'AltGastrointestinais';

    /**
     * Run the migrations.
     * @table AltGastrointestinais
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAltGastrointestinais');
            $table->tinyInteger('DisfagiaAltGastrointestinais')->nullable();
            $table->tinyInteger('VomitosAltGastrointestinais')->nullable();
            $table->tinyInteger('AnorexiaAltGastrointestinais')->nullable();
            $table->tinyInteger('FlatulenciasAltGastrointestinais')->nullable();
            $table->tinyInteger('PiroseAltGastrointestinais')->nullable();
            $table->tinyInteger('DiarreiaAltGastrointestinais')->nullable();
            $table->tinyInteger('DispepsiaAltGastrointestinais')->nullable();
            $table->tinyInteger('PolidipsiaAltGastrointestinais')->nullable();
            $table->tinyInteger('NauseaAltGastrointestinais')->nullable();
            $table->tinyInteger('ConstipacaoAltGastrointestinais')->nullable();
            $table->tinyInteger('EdemaAltGastrointestinais')->nullable();
            $table->string('OutrasAltGastrointestinais', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
