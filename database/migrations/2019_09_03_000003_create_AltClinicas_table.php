<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltclinicasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'AltClinicas';

    /**
     * Run the migrations.
     * @table AltClinicas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAltClinicas');
            $table->tinyInteger('Cabelo_quebradicoAltCinicas')->nullable();
            $table->tinyInteger('Unhas_fracasAltCinicas')->nullable();
            $table->tinyInteger('PalidezAltCinicas')->nullable();
            $table->string('OutrosAltCinicas', 45)->nullable();
            $table->integer('HabitosIntestinalAltCinicas')->nullable();
            $table->integer('Frequencia_urinariaAltCinicas')->nullable();
            $table->string('Passado_CirurgicoAltCinicas', 45)->nullable();
            $table->string('MedicamentosAltCinicas', 45)->nullable();
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
