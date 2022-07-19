<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoEnvolvidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_envolvidos', function (Blueprint $table) {
            $table->increments('endPess_id');
            $table->integer('end_id')->unsigned();
            $table->foreign('end_id')->references('end_id')->on('enderecos');
            $table->integer('env_id')->unsigned();
            $table->foreign('env_id')->references('env_id')->on('envolvidos');
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
        Schema::dropIfExists('endereco_pessoas');
    }
}
