<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorizados', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('naluno');
            $table->string('nome');
            $table->string('cpf')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('telefone')->nullable();
            $table->boolean('criadonosistema')->default(true);
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
        Schema::dropIfExists('autorizados');
    }
}
