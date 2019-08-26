<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Consulta';

    /**
     * Run the migrations.
     * @table Consulta
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idConsulta');
            $table->unsignedInteger('Paciente_idPaciente');
            $table->unsignedInteger('Objetivos_idObjetivos');
            $table->unsignedInteger('Atividade_Fisica_idAtividade_Fisica');
            $table->unsignedInteger('Nutricionista_idNutricionista');
            $table->float('Porc_gordura')->nullable();
            $table->float('Porc_muscular')->nullable();
            $table->float('Peso')->nullable();
            $table->float('Estatura')->nullable();
            $table->float('Circ_cintura')->nullable();
            $table->float('Circ_quadril')->nullable();
            $table->float('Circ_coxa_prox_esq')->nullable();
            $table->float('Circ_coxa_prox_dir')->nullable();
            $table->float('Circ_pantu')->nullable();
            $table->integer('Tmb')->nullable();
            $table->integer('Body_age')->nullable();
            $table->integer('Gord_visceral')->nullable();
            $table->unsignedInteger('Cardapio_idCardapio');
            $table->unsignedInteger('Diagnostico_idDados Clinicos');
            $table->float('Circ_abdomen')->nullable();
            $table->float('Circ_braco_dir')->nullable();
            $table->float('Circ_braco_esq')->nullable();
            $table->float('Circ_punho')->nullable();
            $table->date('Data_consulta')->nullable();
            $table->unsignedInteger('AltGastrointestinais_idAltGastrointestinais');
            $table->unsignedInteger('AntFamiliares_idAntFamiliares');
            $table->unsignedInteger('AltClinicas_idAltClinicas');

            $table->index(["AltGastrointestinais_idAltGastrointestinais"], 'fk_Consulta_AltGastrointestinais1_idx');

            $table->index(["Nutricionista_idNutricionista"], 'fk_Consulta_Nutricionista1_idx');

            $table->index(["AltClinicas_idAltClinicas"], 'fk_Consulta_AltClinicas1_idx');

            $table->index(["Cardapio_idCardapio"], 'fk_Consulta_Cardapio1_idx');

            $table->index(["Atividade_Fisica_idAtividade_Fisica"], 'fk_Consulta_Atividade_Fisica1_idx');

            $table->index(["Diagnostico_idDados Clinicos"], 'fk_Consulta_Diagnóstico1_idx');

            $table->index(["Paciente_idPaciente"], 'fk_Consulta_Paciente1_idx');

            $table->index(["Objetivos_idObjetivos"], 'fk_Consulta_Objetivos1_idx');

            $table->index(["AntFamiliares_idAntFamiliares"], 'fk_Consulta_AntFamiliares1_idx');


            $table->foreign('Paciente_idPaciente')
                ->references('idPaciente')->on('Paciente')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Objetivos_idObjetivos')
                ->references('idObjetivos')->on('Objetivos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Atividade_Fisica_idAtividade_Fisica')
                ->references('idAtividade_Fisica')->on('Atividade_Fisica')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Nutricionista_idNutricionista')
                ->references('idNutricionista')->on('Nutricionista')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Cardapio_idCardapio')
                ->references('idCardapio')->on('Cardapio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Diagnostico_idDados Clinicos')
                ->references('idDadosClinicos')->on('Diagnostico')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('AltGastrointestinais_idAltGastrointestinais')
                ->references('idAltGastrointestinais')->on('AltGastrointestinais')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('AntFamiliares_idAntFamiliares')
                ->references('idAntFamiliares')->on('AntFamiliares')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('AltClinicas_idAltClinicas')
                ->references('idAltClinicas')->on('AltClinicas')
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
