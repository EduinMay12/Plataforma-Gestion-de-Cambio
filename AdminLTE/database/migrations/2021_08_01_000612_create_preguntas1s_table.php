<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntas1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas1s', function (Blueprint $table) {
            $table->id();
            $table->string('textPregunta');
            $table->string('descripcion');
            $table->unsignedBigInteger('cuestionario_id');
            $table->foreign('cuestionario_id')
                    ->references('id')
                    ->on('cuestionario1s')->onDelete('cascade');
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
        Schema::dropIfExists('preguntas1s');
    }
}
