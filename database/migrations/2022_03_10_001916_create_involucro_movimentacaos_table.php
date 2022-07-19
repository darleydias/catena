<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolucroMovimentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involucro_movimentacaos', function (Blueprint $table) {
            $table->increments('invoMov_id');
            $table->integer('involucro_id')->unsigned();
            $table->foreign('involucro_id')->references('involucro_id')->on('involucros');
            $table->timestamp('data')->required();;
            $table->string('invoMov_acao')->required();;// lacre, deslacre
            $table->integer('invoMov_idTestemunha');
            $table->integer('invoMov_idResponsavel')->required();;
            $table->integer('invoMov_tipoResp');//remetente/receptor
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
        Schema::dropIfExists('involucro_movimentacaos');
    }
}
