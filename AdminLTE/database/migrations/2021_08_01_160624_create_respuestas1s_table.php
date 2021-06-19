<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestas1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas1s', function (Blueprint $table) {
            $table->id();
            $table->string('textRespuesta');
            $table->unsignedBigInteger('pregunta_id');

            $table->foreign('pregunta_id')
                ->references('id')->on('preguntas1s')
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
        Schema::dropIfExists('respuestas1s');
    }
}