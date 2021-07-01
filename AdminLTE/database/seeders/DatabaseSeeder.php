<?php

namespace Database\Seeders;

use App\Models\ModuloCapacitaciones\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
        Storage::makeDirectory('categorias');

        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        Categoria::factory(20)->create();
    }
}
