<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class nefropediatrias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nefropediatrias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiario_id')->nullable();
            $table->foreign("beneficiario_id")->references('id')->on('beneficiarios')->onDelete('set null');
  
            $table->date("fecha")->nullable();
            $table->string("peso")->nullable();
            $table->string("talla")->nullable();
            $table->string("tension")->nullable();
            $table->string("temperatura")->nullable();
            $table->string("fCardiaca")->nullable();
            $table->string("fRespiratoria")->nullable();
            $table->text("analisis")->nullable();
            $table->text("diagnostico")->nullable();
            $table->text("tratamiento")->nullable();
            $table->string("medico")->nullable();            

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
        Schema::dropIfExists('nefropediatrias');
    }
}