<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntfamiliaresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'AntFamiliares';

    /**
     * Run the migrations.
     * @table AntFamiliares
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAntFamiliares');
            $table->tinyInteger('Diabetes_melitus')->default('0');
            $table->tinyInteger('Dislipedemia')->default('0');
            $table->tinyInteger('Hepatopatia')->default('0');
            $table->tinyInteger('Has')->default('0');
            $table->tinyInteger('Cardiopatia')->default('0');
            $table->tinyInteger('Cancer')->default('0');
            $table->tinyInteger('Avc')->default('0');
            $table->tinyInteger('Nefropatia')->default('0');
            $table->tinyInteger('Obesidade')->default('0');
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
