<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('tel_id');
            $table->string('tel_codArea')->required();
            $table->string('tel_numero')->required();
            $table->string('tel_tipo')->required();//Celular / Casa / Trabalho
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
        Schema::dropIfExists('telefones');
    }
}
