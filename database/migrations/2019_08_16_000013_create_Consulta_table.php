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
            $table->integer('Paciente_idPaciente');
            $table->integer('Objetivos_idObjetivos');
            $table->integer('Atividade_Fisica_idAtividade_Fisica');
            $table->integer('Nutricionista_idNutricionista');
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
            $table->integer('Cardapio_idCardapio');
            $table->integer('Diagnostico_idDados Clinicos');
            $table->integer('Alteracoes Gastrointestinais_idAlteracoes Gastrointestinais');
            $table->integer('Alteracoes clinicas_idAlteracoes clinicas');
            $table->float('Circ_abdomen')->nullable();
            $table->float('Circ_braco_dir')->nullable();
            $table->float('Circ_braco_esq')->nullable();
            $table->float('Circ_punho')->nullable();
            $table->date('Data_consulta')->nullable();

            $table->index(["Alteracoes Gastrointestinais_idAlteracoes Gastrointestinais"], 'fk_Consulta_Alterações Gastrointestinais1_idx');

            $table->index(["Nutricionista_idNutricionista"], 'fk_Consulta_Nutricionista1_idx');

            $table->index(["Alteracoes clinicas_idAlteracoes clinicas"], 'fk_Consulta_Alterações clínicas1_idx');

            $table->index(["Cardapio_idCardapio"], 'fk_Consulta_Cardapio1_idx');

            $table->index(["Atividade_Fisica_idAtividade_Fisica"], 'fk_Consulta_Atividade_Fisica1_idx');

            $table->index(["Diagnostico_idDados Clinicos"], 'fk_Consulta_Diagnóstico1_idx');

            $table->index(["Paciente_idPaciente"], 'fk_Consulta_Paciente1_idx');

            $table->index(["Objetivos_idObjetivos"], 'fk_Consulta_Objetivos1_idx');


            $table->foreign('Paciente_idPaciente', 'fk_Consulta_Paciente1_idx')
                ->references('idPaciente')->on('Paciente')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Objetivos_idObjetivos', 'fk_Consulta_Objetivos1_idx')
                ->references('idObjetivos')->on('Objetivos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Atividade_Fisica_idAtividade_Fisica', 'fk_Consulta_Atividade_Fisica1_idx')
                ->references('idAtividade_Fisica')->on('Atividade_Fisica')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Nutricionista_idNutricionista', 'fk_Consulta_Nutricionista1_idx')
                ->references('idNutricionista')->on('Nutricionista')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Cardapio_idCardapio', 'fk_Consulta_Cardapio1_idx')
                ->references('idCardapio')->on('Cardapio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Diagnostico_idDados Clinicos', 'fk_Consulta_Diagnóstico1_idx')
                ->references('idDados Clinicos')->on('Diagnostico')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Alteracoes Gastrointestinais_idAlteracoes Gastrointestinais', 'fk_Consulta_Alterações Gastrointestinais1_idx')
                ->references('idAlteracoes Gastrointestinais')->on('Alteracoes Gastrointestinais')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Alteracoes clinicas_idAlteracoes clinicas', 'fk_Consulta_Alterações clínicas1_idx')
                ->references('idAlteracoes clinicas')->on('Alteracoes clinicas')
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
