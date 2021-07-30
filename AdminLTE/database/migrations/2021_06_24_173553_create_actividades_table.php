<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->unsignedBigInteger('leccione_id');
            $table->unsignedBigInteger('cuestionario_id')->nullable();

            $table->foreign('leccione_id')
                  ->references('id')
                  ->on('lecciones')
                  ->onDelete('cascade');
            
            $table->foreign('cuestionario_id')
                  ->references('id')
                  ->on('cuestionarios')
                  ->onDelete('set null');

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
        Schema::dropIfExists('actividades');
    }
}
