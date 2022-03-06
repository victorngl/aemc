<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->integer('paciente_id');
            $table->integer('turma_id');
            $table->integer('anoletivo');
            $table->integer('tipoatendimento_id');
            $table->integer('user_id');
            $table->text('orientacao')->nullable();
            $table->text('ocorrencia')->nullable();
            $table->text('conselhodeclasse')->nullable();
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
        Schema::dropIfExists('atendimentos');
    }
};
