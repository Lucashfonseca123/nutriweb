<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoHasAlimentoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Grupo_has_Alimento';

    /**
     * Run the migrations.
     * @table Grupo_has_Alimento
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Grupo_id');
            $table->unsignedInteger('Alimento_id');
            $table->Integer('idBuscado');
            $table->string('Qtde_Alimento', 45)->nullable();

            $table->index(["Alimento_id"], 'fk_Grupo_has_Alimento_CMVColtaco31_idx');

            $table->index(["Grupo_id"], 'fk_Grupo_has_Alimento_Grupo1_idx');

            $table->foreign('Grupo_id')
                ->references('idGrupo')->on('Grupo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Alimento_id')
                ->references('id')->on('CMVColtaco3')
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
