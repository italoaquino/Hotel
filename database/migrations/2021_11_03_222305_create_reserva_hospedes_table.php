<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaHospedesTable extends Migration
{
    
    public function up()
    {
        Schema::create('reserva_hospedes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hospede_id');
            $table->double('valor');
            $table->date('entrada');
            $table->date('saida');
            $table->integer('pessoas');
            $table->timestamps();
            $table->foreign('hospede_id')->references('id')->on('hospedes')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('reserva_hospedes');
    }
}
