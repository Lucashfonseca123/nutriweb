<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlteracoes GastrointestinaisTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Alteracoes Gastrointestinais';

    /**
     * Run the migrations.
     * @table Alteracoes Gastrointestinais
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAlteracoes Gastrointestinais');
            $table->tinyInteger('Disfagia')->nullable();
            $table->tinyInteger('Vomitos')->nullable();
            $table->tinyInteger('Anorexia')->nullable();
            $table->tinyInteger('Flatulencias')->nullable();
            $table->tinyInteger('Pirose')->nullable();
            $table->tinyInteger('Diarreia')->nullable();
            $table->tinyInteger('Dispepsia')->nullable();
            $table->tinyInteger('Polidipsia')->nullable();
            $table->tinyInteger('Nausea')->nullable();
            $table->tinyInteger('Constipacao')->nullable();
            $table->tinyInteger('Edema')->nullable();
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
