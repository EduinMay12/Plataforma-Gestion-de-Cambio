<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpciones1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opciones1s', function (Blueprint $table) {
            $table->id();
            $table->string('opcion');
            $table->integer('valor');
            $table->string('explicacion');
            $table->string('respuesta');
            $table->unsignedBigInteger('pregunta_id');

            $table->foreign('pregunta_id')
                ->references('id')
                ->on('preguntas2s')
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
        Schema::dropIfExists('opciones1s');
    }
}
