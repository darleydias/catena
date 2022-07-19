<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvolvidoInvestigacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envolvido_investigacaos', function (Blueprint $table) {
            $table->increments('envInvest_id');
                        
            $table->integer('env_id')->unsigned();
            $table->foreign('env_id')->references('env_id')->on('envolvidos');
                        
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
        Schema::dropIfExists('envolvido_investigacaos');
    }
}
