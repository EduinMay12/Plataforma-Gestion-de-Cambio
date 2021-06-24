<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('imagen');
            $table->string('descorta');
            $table->text('deslarga');
            $table->text('requisitos');
            $table->integer('horas');
            $table->boolean('status');
            $table->unsignedBigInteger('instructore_id');
            $table->unsignedBigInteger('categoria_id');

            $table->foreign('instructore_id')
                  ->references('id')
                  ->on('instructores')
                  ->onDelete('cascade');
            
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
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
        Schema::dropIfExists('cursos');
    }
}
