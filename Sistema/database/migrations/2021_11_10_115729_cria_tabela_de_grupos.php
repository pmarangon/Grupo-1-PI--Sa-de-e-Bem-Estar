<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaDeGrupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 50);
            $table->string('esporte', 50);
            $table->string('cidade', 30);
            $table->text('descricao')->nullable();
            $table->string('link', 200);
            $table->unsignedBigInteger('criado_por');

            $table->timestamps();

            $table->foreign('criado_por')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
