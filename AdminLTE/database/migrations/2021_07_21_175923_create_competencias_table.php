<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('accionCorta1_ba');
            $table->text('accionCorta2_ba');
            $table->string('accionCorta3_ba');
            $table->text('accionLarga1_ba');
            $table->text('accionLarga2_ba');
            $table->text('accionLarga3_ba');
            $table->string('accionCorta1_ca');
            $table->text('accionCorta2_ca');
            $table->string('accionCorta3_ca');
            $table->text('accionLarga1_ca');
            $table->text('accionLarga2_ca');
            $table->text('accionLarga3_ca');
            $table->string('accionCorta1_ex');
            $table->text('accionCorta2_ex');
            $table->string('accionCorta3_ex');
            $table->text('accionLarga1_ex');
            $table->text('accionLarga2_ex');
            $table->text('accionLarga3_ex');
            $table->integer('estatus');
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
        Schema::dropIfExists('competencias');
    }
}
