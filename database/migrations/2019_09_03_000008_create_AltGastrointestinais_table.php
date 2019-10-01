<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltgastrointestinaisTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'AltGastrointestinais';

    /**
     * Run the migrations.
     * @table AltGastrointestinais
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAltGastrointestinais');
            $table->tinyInteger('Disfagia')->default('0');
            $table->tinyInteger('Vomitos')->default('0');
            $table->tinyInteger('Anorexia')->default('0');
            $table->tinyInteger('Flatulencias')->default('0');
            $table->tinyInteger('Pirose')->default('0');
            $table->tinyInteger('Diarreia')->default('0');
            $table->tinyInteger('Dispepsia')->default('0');
            $table->tinyInteger('Polidipsia')->default('0');
            $table->tinyInteger('Nausea')->default('0');
            $table->tinyInteger('Constipacao')->default('0');
            $table->tinyInteger('Edema')->default('0');
            $table->string('Outras', 45)->nullable();
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
