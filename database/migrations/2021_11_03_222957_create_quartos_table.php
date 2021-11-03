<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartosTable extends Migration
{
    
    public function up()
    {
        Schema::create('quartos', function (Blueprint $table) {
            $table->id();
            $table->double('valor');
            $table->enum('tipo', ['solteiro', 'casal', 'familia']);
            $table->unsignedBigInteger('reserva_hospede_id');
            $table->timestamps();
            $table->foreign('reserva_hospede_id')->references('id')->on('reserva_hospedes')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('quartos');
    }
}
