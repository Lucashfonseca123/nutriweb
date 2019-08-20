<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Cidade';

    /**
     * Run the migrations.
     * @table Cidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idCidade');
            $table->string('Nome')->nullable();
            $table->integer('Paciente_idPaciente');

            $table->index(["Paciente_idPaciente"], 'fk_Cidade_Paciente1_idx');


            $table->foreign('Paciente_idPaciente', 'fk_Cidade_Paciente1_idx')
                ->references('idPaciente')->on('Paciente')
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
