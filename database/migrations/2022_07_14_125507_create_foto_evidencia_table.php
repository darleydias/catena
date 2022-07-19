<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoEvidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_evidencia', function (Blueprint $table) {
            $table->increments('foto_id');
            $table->timestamps();
            $table->string('foto_uri')->required();
            $table->integer('evid_id')->unsigned();
            
            //$table->foreign('evid_id')->references('evid_id')->on('evidencias');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_evidencia');
    }
}
