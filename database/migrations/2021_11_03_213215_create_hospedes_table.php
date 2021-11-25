<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedesTable extends Migration
{
  
    public function up()
    {
        Schema::create('hospedes', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            $table->string('rg');
            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('cep');
            $table->string('numero');
            $table->enum('tipo', ['fixo', 'comercial', 'residencial']);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');       

        });
    }


    public function down()
    {
        Schema::dropIfExists('hospedes');
    }
}
