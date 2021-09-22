<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestas3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas3s', function (Blueprint $table) {
            $table->id();
            $table->string('textRespuesta');
            $table->unsignedBigInteger('pregunta_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('pregunta_id')
                ->references('id')->on('preguntas3s')
                ->onDelete('cascade');

            $table->foreing('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('respuestas3s');
    }
}
