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
            $table->tinyInteger('Diabetes_melitus')->nullable();
            $table->tinyInteger('Dislipedemia')->nullable();
            $table->tinyInteger('Hepatopatia')->nullable();
            $table->tinyInteger('Has')->nullable();
            $table->tinyInteger('Cardiopatia')->nullable();
            $table->tinyInteger('Cancer')->nullable();
            $table->tinyInteger('Avc')->nullable();
            $table->tinyInteger('Nefropatia')->nullable();
            $table->tinyInteger('Obesidade')->nullable();
            $table->string('Outras', 45)->nullable();
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
