<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitularidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titularidades', function (Blueprint $table) {
            $table->increments('titularidade_id');
            $table->integer('titular_id')->unsigned();
            $table->foreign('titular_id')->references('titular_id')->on('titulars');
            $table->integer('invest_id')->unsigned();
            $table->foreign('invest_id')->references('invest_id')->on('investigacoes');
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
        Schema::dropIfExists('titularidades');
    }
}
