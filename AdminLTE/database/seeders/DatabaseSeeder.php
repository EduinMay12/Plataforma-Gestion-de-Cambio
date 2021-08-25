<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Cuestionario;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Grupo;
use App\Models\ModuloCapacitaciones\Instructore;
use App\Models\ModuloCapacitaciones\Leccione;
use App\Models\User;

use App\Models\ModuloDiagnosticos\Nivel;
use App\Models\ModuloDiagnosticos\Competencia;
use App\Models\ModuloDiagnosticos\Puesto;
use App\Models\ModuloDiagnosticos\RoleDiagnostico;
use App\Models\ModuloDiagnosticos\Cuestionario1;
use App\Models\ModuloDiagnosticos\Preguntas1;
use App\Models\ModuloDiagnosticos\Respuestas1;

use App\Models\ModuloDiagnosticos\Cuestionario2;
use App\Models\ModuloDiagnosticos\Preguntas2;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Carpeta donde se guardan las imagenes de categorias de capacitaciones
        Storage::deleteDirectory('categorias');
        Storage::deleteDirectory('cursos');
        Storage::deleteDirectory('grupos');
        Storage::makeDirectory('categorias');
        Storage::makeDirectory('cursos');
        Storage::makeDirectory('grupos');

        \App\Models\User::factory(50)->create();
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        Categoria::factory(20)->create();
        Instructore::factory(50)->create();
        Curso::factory(80)->create();
        Grupo::factory(300)->create();
        Leccione::factory(300)->create();
        Cuestionario::factory(20)->create();

        $this->call(NivelSeeder::class);
        Competencia::factory(10)->create();
        Puesto::factory(6)->create();
        RoleDiagnostico::factory(10)->create();
        Cuestionario1::factory(6)->create();
        Preguntas1::factory(10)->create();
        Respuestas1::factory(10)->create();
        Cuestionario2::factory(6)->create();
        Preguntas2::factory(10)->create();
    }
}
