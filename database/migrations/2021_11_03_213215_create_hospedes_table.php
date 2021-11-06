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
            $table->string('nome');
            $table->string('sobrenome');
            $table->enum('sexo', ['masculino', 'feminino']);
            $table->string('cpf');
            $table->date('data_nasc');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('endereco_id');
            $table->timestamps();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospedes');
    }
}
