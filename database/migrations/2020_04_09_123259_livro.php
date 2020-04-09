<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Livro extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',50);
            $table->date('ano_lancamento');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('editora_id');
            $table->unsignedBigInteger('genero_id');   
            $table->foreign('autor_id')->references('id')->on('autor');
            $table->foreign('editora_id')->references('id')->on('editora');
            $table->foreign('genero_id')->references('id')->on('genero');
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
        Schema::dropIfExists('livro');
    }
}