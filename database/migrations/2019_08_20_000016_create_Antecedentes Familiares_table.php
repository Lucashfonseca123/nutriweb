<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentes FamiliaresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Antecedentes Familiares';

    /**
     * Run the migrations.
     * @table Antecedentes Familiares
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAntecedentes Familiares');
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
            $table->integer('Consulta_idConsulta');

            $table->index(["Consulta_idConsulta"], 'fk_Antecedentes Familiares_Consulta1_idx');


            $table->foreign('Consulta_idConsulta', 'fk_Antecedentes Familiares_Consulta1_idx')
                ->references('idConsulta')->on('Consulta')
                ->onDelete('no action')
                ->onUpdate('no action');
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
