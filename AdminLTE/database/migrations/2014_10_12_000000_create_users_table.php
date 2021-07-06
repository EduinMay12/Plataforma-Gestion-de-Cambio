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
            $table->string('apellido')->default('');
            $table->string('direccion')->default('');
            $table->string('estatus')->default('');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('d_asenta')->default('');
            $table->string('d_ciudad')->default('');
            $table->string('d_codigo')->default('');

            $table->string('puesto_actual_id')->default('');
            $table->string('puesto_futuro_id')->default('');
            $table->string('tipo_persona_id')->default('');

            $table->string('empresa')->default('');
            $table->string('sucursal')->default('');

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
