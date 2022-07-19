<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * 1) reconhecimento;
     * 2) isolamento; 
     * 3) fixação; 
     * 4) coleta; 
     * 5) acondicionamento; 
     * 6) transporte;
     * 7) recebimento; 
     * 8) processamento; 
     * 9) armazenamento; 
     * 10)descarte.
     * 

     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('statuses_id');
            $table->string('statuses_titulo')->unique(); 
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
        Schema::dropIfExists('statuses');
    }
}
