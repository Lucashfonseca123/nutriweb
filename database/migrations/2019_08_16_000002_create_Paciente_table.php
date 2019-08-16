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
            $table->string('Etilista', 45)->nullable();
            $table->double('ConsumoAgua')->nullable();
            $table->char('UsouSuplem', 2)->nullable();
            $table->char('CozinhaCasa', 2)->nullable();
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
