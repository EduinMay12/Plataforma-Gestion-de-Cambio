<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestas2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas2s', function (Blueprint $table) {
            $table->id();
            $table->string('textRespuesta');
            $table->unsignedBigInteger('pregunta_id');

            $table->foreign('pregunta_id')
                ->references('id')->on('preguntas2s')
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
        Schema::dropIfExists('respuestas2s');
    }
}