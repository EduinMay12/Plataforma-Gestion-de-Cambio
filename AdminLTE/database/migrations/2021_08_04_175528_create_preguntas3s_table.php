<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntas3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas3s', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('textPregunta');
            $table->unsignedBigInteger('cuestionario_id');

            $table->foreign('cuestionario_id')
                ->references('id')
                ->on('cuestionario3s')
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
        Schema::dropIfExists('preguntas3s');
    }
}
