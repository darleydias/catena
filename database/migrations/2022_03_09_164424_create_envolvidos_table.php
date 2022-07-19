<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvolvidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envolvidos', function (Blueprint $table) {
            $table->increments('env_id');
            $table->string('env_nomeCompleto')->required();
            $table->string('env_sexo')->required();
            $table->string('env_nomeMae')->nullable();
            $table->string('env_dtNasc')->nullable();
            $table->string('env_CPF')->nullable();
            $table->string('env_RG')->nullable();
            $table->string('env_naturalidade')->nullable();

            $table->integer('tipoEnv_id')->unsigned();
          $table->foreign('tipoEnv_id')->references('tipoEnv_id')->on('tipo_envolvidos');

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
        Schema::dropIfExists('envolvidos');
    }
}
