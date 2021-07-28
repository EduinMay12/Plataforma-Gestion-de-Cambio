<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenciasHasPuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencia_puesto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competencia_id');
            $table->unsignedBigInteger('puesto_id');
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('competencia_id')->references('id')->on('competencias')
                ->onDelete('cascade');
            $table->foreign('puesto_id')->references('id')->on('puestos')
                ->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('nivels')
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
        Schema::dropIfExists('competencias_has_puestos');
    }
}
