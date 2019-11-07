<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCMVColtaco3sTable extends Migration
{
    /**
     * Run the migrations.
    
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CMVColtaco3', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('categoria', 100)->nullable();
            $table->string('numeroAlimento', 10)->nullable();
            $table->string('descricaoAlimento',100)->nullable();
            $table->string('umidade', 20)->nullable();
            $table->string('energiaKcal', 20)->nullable();
            $table->string('energiaKj', 20)->nullable();
            $table->string('proteina', 20)->nullable();
            $table->string('lipideos', 20)->nullable();
            $table->string('colesterol',20)->nullable();
            $table->string('carboidrato',20)->nullable();
            $table->string('fibraAlimentar',20)->nullable();
            $table->string('cinzas',20)->nullable();
            $table->string('calcio',20)->nullable();
            $table->string('magnesio',20)->nullable();
            $table->string('manganes', 20)->nullable();
            $table->string('fosforo',20)->nullable();
            $table->string('ferro',20)->nullable();
            $table->string('sodio',20)->nullable();
            $table->string('potassio',20)->nullable();
            $table->string('cobre',20)->nullable();
            $table->string('zinco',20)->nullable();
            $table->string('retinol',20)->nullable();
            $table->string('re',20)->nullable();
            $table->string('rae', 20)->nullable();
            $table->string('tiamina',20)->nullable();
            $table->string('riboflavina',20)->nullable();
            $table->string('piridoxina',20)->nullable();
            $table->string('niacina',20)->nullable();
            $table->string('vitaminaC',20)->nullable();
            $table->string('created_at',30)->nullable();
            $table->string('updated_at',30)->nullable();
                             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CMVColtaco3');
    }
}
