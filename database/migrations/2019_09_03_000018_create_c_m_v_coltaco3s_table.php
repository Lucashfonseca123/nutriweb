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
            $table->string('categoria', 100);
            $table->string('numeroAlimento', 10);
            $table->string('descricaoAlimento',100);
            $table->string('umidade', 20);
            $table->string('energiaKcal', 20);
            $table->string('energiaKj', 20);
            $table->string('proteina', 20);
            $table->string('lipideos', 20);
            $table->string('colesterol',20);
            $table->string('carboidrato',20);
            $table->string('fibraAlimentar',20);
            $table->string('cinzas',20);
            $table->string('calcio',20);
            $table->string('magnesio',20);
            $table->string('manganes', 20);
            $table->string('fosforo',20);
            $table->string('ferro',20);
            $table->string('sodio',20);
            $table->string('potassio',20);
            $table->string('cobre',20);
            $table->string('zinco',20);
            $table->string('retinol',20);
            $table->string('re',20);
            $table->string('rae', 20);
            $table->string('tiamina',20);
            $table->string('riboflavina',20);
            $table->string('piridoxina',20);
            $table->string('niacina',20);
            $table->string('vitaminaC',20);
            $table->string('created_at',30);
            $table->string('updated_at',30);
                             
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
