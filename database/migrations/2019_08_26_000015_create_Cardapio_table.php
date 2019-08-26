<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardapioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Cardapio';

    /**
     * Run the migrations.
     * @table Cardapio
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idCardapio');
            $table->date('Data')->nullable();
            $table->unsignedInteger('Paciente_idPaciente');

            $table->index(["Paciente_idPaciente"], 'fk_Cardapio_Paciente1_idx');


            $table->foreign('Paciente_idPaciente')
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
