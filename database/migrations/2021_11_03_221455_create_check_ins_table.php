<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckInsTable extends Migration
{
    
    public function up()
    {
        Schema::create('check_ins', function (Blueprint $table) {
            $table->id();
            $table->string('quarto_hosp');
            $table->string('confirmacao');
            $table->date('entrada');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('check_ins');
    }
}
