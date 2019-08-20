<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlteracoes ClinicasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Alteracoes clinicas';

    /**
     * Run the migrations.
     * @table Alteracoes clinicas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAlteracoes clinicas');
            $table->tinyInteger('Cabelo_quebradico')->nullable();
            $table->tinyInteger('Unhas_fracas')->nullable();
            $table->tinyInteger('Palidez')->nullable();
            $table->string('Outros', 45)->nullable();
            $table->tinyInteger('HabitosIntestinal')->nullable();
            $table->enum('Frequencia_urinaria', ['Muita', 'Normal', 'Pouca'])->nullable();
            $table->string('Alteracoes clinicascol', 45)->nullable();
            $table->string('Alteracoes clinicascol1', 45)->nullable();
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
