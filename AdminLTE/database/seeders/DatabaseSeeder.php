<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Instructore;
use App\Models\ModuloCapacitaciones\Curso;

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
        Storage::makeDirectory('categorias');
        Storage::makeDirectory('cursos');

        \App\Models\User::factory(100)->create();
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        Categoria::factory(20)->create();
        Instructore::factory(50)->create();
        Curso::factory(80)->create();
    }
}
