<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Endereco';

    /**
     * Run the migrations.
     * @table Endereco
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idEndereco');
            $table->string('Rua', 45)->nullable();
            $table->integer('Numero')->nullable();
            $table->char('Cep', 8)->nullable();
            $table->string('Bairo')->nullable();
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
