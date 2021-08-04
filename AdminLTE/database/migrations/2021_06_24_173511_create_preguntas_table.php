<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('textPregunta');
            $table->string('opcion1');
            $table->integer('valor1');
            $table->text('explicacion1');
            $table->string('opcion2');
            $table->integer('valor2');
            $table->text('explicacion2');
            $table->string('opcion3');
            $table->integer('valor3');
            $table->text('explicacion3');
            $table->string('opcion4');
            $table->integer('valor4');
            $table->text('explicacion4');
            $table->string('opcion5');
            $table->integer('valor5');
            $table->text('explicacion5');
            $table->unsignedBigInteger('cuestionario_id');

            $table->foreign('cuestionario_id')
                  ->references('id')
                  ->on('cuestionarios')
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
        Schema::dropIfExists('preguntas');
    }
}
