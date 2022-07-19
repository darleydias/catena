<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidencias', function (Blueprint $table) {
            $table->increments('evid_id');
            $table->timestamps();
            $table->string('evid_descri')->required();
            $table->integer('tipoEvid_id')->unsigned();
            $table->foreign('tipoEvid_id')->references('tipoEvid_id')->on('tipo_evidencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidencias');
    }
}
