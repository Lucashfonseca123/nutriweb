<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemcardapioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ItemCardapio';

    /**
     * Run the migrations.
     * @table ItemCardapio
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('IdItemCardapio');
            $table->integer('OpcoesItemCardapio')->nullable();
            $table->string('HorarioItemCardapio',20)->nullable();
            $table->unsignedInteger('Cardapio_idCardapio');
            $table->unsignedInteger('Grupo_idGrupo');
            $table->unsignedInteger('Refeicao_idRefeicao');

            $table->index(["Grupo_idGrupo"], 'fk_ItemCardapio_Grupo1_idx');

            $table->index(["Cardapio_idCardapio"], 'fk_ItemCardapio_Cardapio1_idx');

            $table->index(["Refeicao_idRefeicao"], 'fk_ItemCardapio_Refeicao1_idx');


            $table->foreign('Cardapio_idCardapio')
                ->references('idCardapio')->on('Cardapio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Grupo_idGrupo')
                ->references('idGrupo')->on('Grupo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Refeicao_idRefeicao')
                ->references('idRefeicao')->on('Refeicao')
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
