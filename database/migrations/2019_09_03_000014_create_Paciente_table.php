<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Paciente';

    /**
     * Run the migrations.
     * @table Paciente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idPaciente');
            $table->string('NomePaciente', 45)->nullable();
            $table->string('TelefonePaciente', 20)->nullable();
            $table->string('EmailPaciente', 45)->nullable();
            $table->enum('SexoPaciente', ['M', 'F', 'O'])->nullable();
            $table->date('DataDeNascimentoPaciente')->nullable();
            $table->string('ProfissaoPaciente', 45)->nullable();
            $table->string('IntoleranciaAlimentarPaciente', 45)->nullable();
            $table->enum('MastigacaoPaciente', ['Lenta' ,'Normal', 'Rápida' ,'Muito Rápida'])->nullable();
            $table->string('PrefAlimentaresPaciente', 45)->nullable();
            $table->string('AversaoAlimentarPaciente', 45)->nullable();
            $table->tinyInteger('TabagistaPaciente')->nullable();
            $table->double('ConsumoAguaPaciente')->nullable();
            $table->string('UsouSuplemPaciente', 45)->nullable();
            $table->string('CozinhaCasaPaciente', 45)->nullable();
            $table->string('Tempo_parouPaciente', 45)->nullable();
            $table->unsignedInteger('Cidade_idCidade');
            $table->unsignedInteger('Estado_idEstado');
            $table->unsignedInteger('Endereco_idEndereco');
            $table->float('TrabalhaHoraDiaPaciente')->nullable();
            $table->float('ConsumoMedioPaciente')->nullable();
            $table->integer('Cigar_diaPaciente')->nullable();
            $table->tinyInteger('EtilistaPaciente')->nullable();
            $table->text('DesjejumPaciente')->nullable();
            $table->text('Lanche1Paciente')->nullable();
            $table->text('AlmocoPaciente')->nullable();
            $table->text('Lanche2Paciente')->nullable();
            $table->text('JantarPaciente')->nullable();
            $table->text('CeiaPaciente')->nullable();
            $table->text('RotinaPaciente')->nullable();
            $table->tinyInteger('ExcluidoPaciente');
            





            $table->index(["Estado_idEstado"], 'fk_Paciente_Estado1_idx');

            $table->index(["Endereco_idEndereco"], 'fk_Paciente_Endereco1_idx');

            $table->index(["Cidade_idCidade"], 'fk_Paciente_Cidade1_idx');


            $table->foreign('Cidade_idCidade')
                ->references('idCidade')->on('Cidade')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Estado_idEstado')
                ->references('idEstado')->on('Estado')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Endereco_idEndereco')
                ->references('idEndereco')->on('Endereco')
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
