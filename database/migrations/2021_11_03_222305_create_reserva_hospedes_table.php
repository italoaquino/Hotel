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
            $table->unsignedBigInteger('funcionario_id');
            $table->double('valor');
            $table->date('tempo_reserva');
            $table->foreign('hospede_id')->references('id')->on('hospedes')->onDelete('cascade');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('reserva_hospedes');
    }
}
