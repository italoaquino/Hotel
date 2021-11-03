<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string("identificacao");
            $table->unsignedBigInteger("check_in_id");
            $table->unsignedBigInteger("pagamento_id");
            $table->timestamps();
            $table->foreign('pagamento_id')->references('id')->on('pagamentos')->onDelete('cascade');
            $table->foreign('check_in_id')->references('id')->on('check_ins')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
