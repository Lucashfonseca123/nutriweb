<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltclinicasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'AltClinicas';

    /**
     * Run the migrations.
     * @table AltClinicas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAltClinicas');
            $table->tinyInteger('Cabelo_quebradico')->default('0');
            $table->tinyInteger('Unhas_fracas')->default('0');
            $table->tinyInteger('Palidez')->default('0');
            $table->string('Outros', 45)->nullable();
            $table->integer('HabitosIntestinal')->nullable();
            $table->integer('Frequencia_urinaria')->nullable();
            $table->string('Passado_Cirurgico', 45)->nullable();
            $table->string('Meidcamentos', 45)->nullable();
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
