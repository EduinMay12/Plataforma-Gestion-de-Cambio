<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->default('default.png');
            $table->string('name');
            $table->string('apellido')->default('Agregar Apellido Paterno');


            $table->string('puesto_actual_id')->default('Puesto Actual');
            $table->string('puesto_futuro_id')->default('Puesto Futuro');

            $table->string('d_asenta')->default('');
            $table->string('d_ciudad')->default('');

            $table->string('empresa_id')->default('Empresa');
            $table->string('sucursal_id')->default('Sucursal');
            $table->string('direccion')->default('Direccion');

            $table->boolean('estatus')->default('0');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
