<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoRedesSocialsTable extends Migration
{
    /**
     * Instagram
     * Facebook
     * Telegram
     * tic-toc
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_redes_socials', function (Blueprint $table) {
            $table->increments('tipoRede_id');
            $table->string('tipoRede_nome')->required();;
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
        Schema::dropIfExists('tipo_redes_socials');
    }
}
