<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacioncuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacioncuestionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participante_id');
            $table->string('fecha_asignada');
            $table->string('fecha_limite');
            $table->unsignedBigInteger('cuestionario_id');

            $table->foreign('participante_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('cuestionario_id')
                ->references('id')->on('cuestionario2s')
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
        Schema::dropIfExists('asignacioncuestionarios');
    }
}
