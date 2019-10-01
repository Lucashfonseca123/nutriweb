<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Diagnostico';

    /**
     * Run the migrations.
     * @table Diagnostico
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idDadosClinicos');
            $table->tinyInteger('Diabetes_melitus')->default('0');
            $table->tinyInteger('Displidemia')->default('0');
            $table->tinyInteger('Gastrite')->default('0');
            $table->tinyInteger('Hepatopatia')->default('0');
            $table->tinyInteger('Depressao')->default('0');
            $table->tinyInteger('Has')->default('0');
            $table->tinyInteger('Cardiopata')->default('0');
            $table->tinyInteger('Neoplasia')->default('0');
            $table->tinyInteger('Ansiedade')->default('0');
            $table->tinyInteger('Renite_sinusite')->default('0');
            $table->tinyInteger('Ic')->default('0');
            $table->tinyInteger('Nefropatia')->default('0');
            $table->tinyInteger('Ulcera')->default('0');
            $table->tinyInteger('Irritabilidade')->default('0');
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
