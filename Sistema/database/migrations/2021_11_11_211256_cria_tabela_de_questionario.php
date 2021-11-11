<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaDeQuestionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario', function (Blueprint $table) {
            $table->id();

            $table->string('esporte', 50);
            $table->string('cidade', 30);
            $table->string('horario', 10);
            $table->unsignedBigInteger('usuario_id');

            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionario');
    }
}
