<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSayfaTable extends Migration
{
    public function up()
    {
        Schema::create('sayfa', function (Blueprint $table) {
            $table->id();
            $table->string("sayfa_adi");
            $table->integer("sayfa_no"); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sayfa');
    }
}
