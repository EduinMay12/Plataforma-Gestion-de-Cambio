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
            $table->string('apellido_paterno')->default('Agregar Apellido Paterno');
            $table->string('apellido_materno')->default('Agregar Apellido Materno');
            $table->string('fecha_nacimiento')->default('Agregar Fecha de Nacimiento');
            $table->string('puesto_actual_id')->default('Puesto Actual');
            $table->string('puesto_futuro_id')->default('Puesto Futuro');
            $table->string('tipo_persona_id')->default('Tipo');
            $table->string('estado_id')->default('Estado');
            $table->string('sucursal_id')->default('Sucursal');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< Updated upstream
=======

            $table->string('d_asenta')->default('');
            $table->string('d_ciudad')->default('');

            $table->string('puesto_actual_id')->default('');
            $table->string('puesto_futuro_id')->default('');

            $table->string('empresa_id')->default('');

>>>>>>> Stashed changes
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
