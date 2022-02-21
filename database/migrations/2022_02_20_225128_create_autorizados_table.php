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
            $table->string('cpf');
            $table->string('parentesco');
            $table->string('telefone');
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
