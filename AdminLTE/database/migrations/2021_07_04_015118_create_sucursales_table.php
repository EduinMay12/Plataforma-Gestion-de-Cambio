<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empresa')->unique();
            $table->foreign('empresa')
                  ->references('id')
                  ->on('empresas')
                  ->onDelete('cascade');

            $table->string('sucursal');

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->string('direccion');
            $table->string('empleados');
            $table->string('d_asenta');
            $table->string('d_ciudad');

            $table->unsignedBigInteger('d_codigo')->unique();
            $table->foreign('d_codigo')
                  ->references('d_codigo')
                  ->on('estados')
                  ->onDelete('cascade');

            $table->boolean('estatus');
            $table->boolean('tamaño');

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
        Schema::dropIfExists('sucursales');
    }
}
