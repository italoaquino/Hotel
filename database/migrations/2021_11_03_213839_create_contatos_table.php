<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('email');
            $table->enum('tipo', ['fixo', 'comercial', 'residencial']);
            $table->unsignedBigInteger('hospede_id');
            $table->timestamps();
            $table->foreign('hospede_id')->references('id')->on('hospedes')->onDelete('cascade');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
