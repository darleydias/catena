<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedesSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes_socials', function (Blueprint $table) {
            $table->increments('rede_id');

            $table->integer('tipoRede_id')->unsigned();
            $table->foreign('tipoRede_id')->references('tipoRede_id')->on('tipo_redes_socials');

            $table->string('rede_identificador')->required();
            $table->integer('env_id')->unsigned();
            $table->foreign('env_id')->references('env_id')->on('envolvidos');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redes_socials');
    }
}
