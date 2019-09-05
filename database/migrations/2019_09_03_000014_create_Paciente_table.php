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
            $table->string('Nome', 45)->nullable();
            $table->integer('Telefone')->nullable();
            $table->string('Email', 45)->nullable();
            $table->enum('Sexo', ['M', 'F', 'O'])->nullable();
            $table->date('DataDeNascimento')->nullable();
            $table->string('Endereco', 45)->nullable();
            $table->string('Profissao', 45)->nullable();
            $table->string('IntoleranciaAlimentar', 45)->nullable();
            $table->string('Mastigacao', 45)->nullable();
            $table->string('Apetite', 45)->nullable();
            $table->string('PrefAlimentares', 45)->nullable();
            $table->string('AversaoAlimentar', 45)->nullable();
            $table->tinyInteger('Tabagista')->nullable();
            $table->double('ConsumoAgua')->nullable();
            $table->string('UsouSuplem', 45)->nullable();
            $table->tinyInteger('CozinhaCasa')->nullable();
            $table->unsignedInteger('Cidade_idCidade');
            $table->unsignedInteger('Estado_idEstado');
            $table->unsignedInteger('Endereco_idEndereco');
            $table->float('TrabalhaHoraDia')->nullable();
            $table->string('Tempo_parou', 45)->nullable();
            $table->float('ConsumoMedio')->nullable();
            $table->integer('Cigar_dia')->nullable();
            $table->tinyInteger('Etilista')->nullable();
            $table->text('Desjejum')->nullable();
            $table->text('Lanche1', 45)->nullable();
            $table->text('Almoco')->nullable();
            $table->text('Lanche2')->nullable();
            $table->text('Jantar')->nullable();
            $table->text('Ceia')->nullable();


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
