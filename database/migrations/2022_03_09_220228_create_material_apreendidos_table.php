<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialApreendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_apreendidos', function (Blueprint $table) {
            $table->increments('matApreendido_id');
            $table->text('matApreendido_descri')->required();
            $table->integer('matApreendido_quant')->required();

            $table->integer('involucro_id')->unsigned();
            $table->foreign('involucro_id')->references('involucro_id')->on('involucros');

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
        Schema::dropIfExists('material_apreendidos');
    }
}
