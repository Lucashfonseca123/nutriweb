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
            $table->increments('idDados Clinicos');
            $table->tinyInteger('Diabetes_melitus')->nullable();
            $table->tinyInteger('Displidemia')->nullable();
            $table->tinyInteger('Gastrite')->nullable();
            $table->tinyInteger('Hepatopatia')->nullable();
            $table->tinyInteger('Depressao')->nullable();
            $table->tinyInteger('Has')->nullable();
            $table->tinyInteger('Cardiopata')->nullable();
            $table->tinyInteger('Neoplasia')->nullable();
            $table->tinyInteger('Ansiedade')->nullable();
            $table->tinyInteger('Renite_sinusite')->nullable();
            $table->tinyInteger('Ic')->nullable();
            $table->tinyInteger('Nefropatia')->nullable();
            $table->tinyInteger('Ulcera')->nullable();
            $table->tinyInteger('Irritabilidade')->nullable();
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
