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
            $table->string('cidade');
            $table->string('estado');
            $table->string('endereco');
            $table->string('complemento');
            $table->enum('tipo_num', ['fix', 'com', 'cel']);
            $table->string('numero_tef');
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
