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
            $table->unsignedInteger('Objetivos_idObjetivos')->nullable();
            $table->unsignedInteger('Atividade_Fisica_idAtividade_Fisica')->nullable();
            $table->unsignedInteger('Nutricionista_idNutricionista');
            $table->float('Porc_gorduraConsulta')->nullable();
            $table->float('Porc_muscularConsulta')->nullable();
            $table->float('PesoConsulta')->nullable();
            $table->float('EstaturaConsulta')->nullable();
            $table->float('Circ_cinturaConsulta')->nullable();
            $table->float('Circ_quadrilConsulta')->nullable();
            $table->float('Circ_coxa_prox_esqConsulta')->nullable();
            $table->float('Circ_coxa_prox_dirConsulta')->nullable();
            $table->float('Circ_pantuConsulta')->nullable();
            $table->integer('TmbConsulta')->nullable();
            $table->integer('Body_ageConsulta')->nullable();
            $table->integer('Gord_visceralConsulta')->nullable();
            $table->unsignedInteger('Cardapio_idCardapio')->nullable();
            $table->unsignedInteger('Diagnostico_idDados Clinicos')->nullable();
            $table->float('Circ_abdomenConsulta')->nullable();
            $table->float('Circ_braco_dirConsulta')->nullable();
            $table->float('Circ_braco_esqConsulta')->nullable();
            $table->float('Circ_punhoConsulta')->nullable();
            $table->date('Data_consultaConsulta')->nullable();
            $table->unsignedInteger('AltGastrointestinais_idAltGastrointestinais')->nullable();
            $table->unsignedInteger('AntFamiliares_idAntFamiliares')->nullable();
            $table->unsignedInteger('AltClinicas_idAltClinicas')->nullable();
            $table->tinyInteger('AlteracaoConsulta');
            $table->tinyInteger('PrimeiraConsulta');
            $table->timestamps();

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
