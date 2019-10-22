<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntfamiliaresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'AntFamiliares';

    /**
     * Run the migrations.
     * @table AntFamiliares
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAntFamiliares');
            $table->tinyInteger('Diabetes_melitusAntFamiliares')->nullable();
            $table->tinyInteger('DislipedemiaAntFamiliares')->nullable();
            $table->tinyInteger('HepatopatiaAntFamiliares')->nullable();
            $table->tinyInteger('HasAntFamiliares')->nullable();
            $table->tinyInteger('CardiopatiaAntFamiliares')->nullable();
            $table->tinyInteger('CancerAntFamiliares')->nullable();
            $table->tinyInteger('AvcAntFamiliares')->nullable();
            $table->tinyInteger('NefropatiaAntFamiliares')->nullable();
            $table->tinyInteger('ObesidadeAntFamiliares')->nullable();
            $table->string('OutrasAntFamiliares', 45)->nullable();
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
