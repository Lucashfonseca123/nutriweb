<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadeFisicaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Atividade_Fisica';

    /**
     * Run the migrations.
     * @table Atividade_Fisica
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAtividade_Fisica');
            $table->tinyInteger('PraticaAtividade_Fisica')->nullable();
            $table->string('DescricaoAtividade_Fisica', 45)->nullable();
            $table->string('TempParouAtividade_Fisica', 45)->nullable();
            $table->string('HorarioInicioAtividade_Fisica')->nullable();
            $table->string('HorarioFinalAtividade_Fisica')->nullable();
            $table->integer('FreqSemanaAtividade_Fisica')->nullable();
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
