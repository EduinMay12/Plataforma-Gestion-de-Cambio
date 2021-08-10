<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:AdminLTE/database/migrations/2021_08_02_021117_create_opciones1s_table.php
class CreateOpciones1sTable extends Migration
=======
class CreateOpciones2sTable extends Migration
>>>>>>> remotes/origin/Eduin_May:AdminLTE/database/migrations/2021_08_04_181027_create_opciones2s_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:AdminLTE/database/migrations/2021_08_02_021117_create_opciones1s_table.php
        Schema::create('opciones1s', function (Blueprint $table) {
=======
        Schema::create('opciones2s', function (Blueprint $table) {
>>>>>>> remotes/origin/Eduin_May:AdminLTE/database/migrations/2021_08_04_181027_create_opciones2s_table.php
            $table->id();
            $table->string('opcion');
            $table->integer('valor');
            $table->string('explicacion');
            $table->string('respuesta');
            $table->unsignedBigInteger('pregunta_id');

            $table->foreign('pregunta_id')
                ->references('id')
<<<<<<< HEAD:AdminLTE/database/migrations/2021_08_02_021117_create_opciones1s_table.php
                ->on('preguntas2s')
=======
                ->on('preguntas3s')
>>>>>>> remotes/origin/Eduin_May:AdminLTE/database/migrations/2021_08_04_181027_create_opciones2s_table.php
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
<<<<<<< HEAD:AdminLTE/database/migrations/2021_08_02_021117_create_opciones1s_table.php
        Schema::dropIfExists('opciones1s');
=======
        Schema::dropIfExists('opciones2s');
>>>>>>> remotes/origin/Eduin_May:AdminLTE/database/migrations/2021_08_04_181027_create_opciones2s_table.php
    }
}
