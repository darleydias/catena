<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoEnvolvidosTable extends Migration
{
    /**
     * Testemunha
     * Investigado
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_envolvidos', function (Blueprint $table) {
            $table->increments('tipoEnv_id');
            $table->string('tipoEnv_descri')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_envolvidos');
    }
}
