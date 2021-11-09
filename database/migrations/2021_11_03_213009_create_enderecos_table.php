<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) 
        {
            $table->id();
            $table->string("cep");
            $table->string("bairro");
            $table->string("largadouro");
            $table->string("cidade");
            $table->string("complemento");
            $table->string("numero");
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
        Schema::dropIfExists('enderecos');
    }
}
