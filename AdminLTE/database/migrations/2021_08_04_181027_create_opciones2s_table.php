<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpciones2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opciones2s', function (Blueprint $table) {
            $table->id();
            $table->string('opcion');
            $table->integer('valor');
            $table->string('explicacion');
            $table->string('respuesta');
            $table->unsignedBigInteger('pregunta_id');

            $table->foreign('pregunta_id')
                ->references('id')
                ->on('preguntas3s')
                ->onDelete('cascade');
                
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
        Schema::dropIfExists('opciones2s');
    }
}
