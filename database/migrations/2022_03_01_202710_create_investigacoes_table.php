<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigacoes', function (Blueprint $table) {
            $table->increments('invest_id');
            
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('categories');

            $table->integer('statuses_id')->unsigned();
            $table->foreign('statuses_id')->references('statuses_id')->on('statuses');
            
            $table->string('invest_nome',100)->unique();
            $table->text('invest_description')->nullable();
            $table->string('invest_anexo')->nullable();
            $table->timestamp('invest_dtInicio')->nullable();

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
        Schema::dropIfExists('investigacoes');
    }
}
