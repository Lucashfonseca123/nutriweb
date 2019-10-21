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
            $table->tinyInteger('Diabetes_melitusDiagnostico')->nullable();
            $table->tinyInteger('DisplidemiaDiagnostico')->nullable();
            $table->tinyInteger('GastriteDiagnostico')->nullable();
            $table->tinyInteger('HepatopatiaDiagnostico')->nullable();
            $table->tinyInteger('DepressaoDiagnostico')->nullable();
            $table->tinyInteger('HasDiagnostico')->nullable();
            $table->tinyInteger('CardiopataDiagnostico')->nullable();
            $table->tinyInteger('NeoplasiaDiagnostico')->nullable();
            $table->tinyInteger('AnsiedadeDiagnostico')->nullable();
            $table->tinyInteger('Renite_sinusiteDiagnostico')->nullable();
            $table->tinyInteger('IcDiagnosticoDiagnostico')->nullable();
            $table->tinyInteger('NefropatiaDiagnostico')->nullable();
            $table->tinyInteger('UlceraDiagnostico')->nullable();
            $table->tinyInteger('IrritabilidadeDiagnostico')->nullable();
            $table->string('OutrasDiagnostico', 45)->nullable();
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
