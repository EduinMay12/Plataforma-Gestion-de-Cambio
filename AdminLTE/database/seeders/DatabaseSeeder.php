<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> Stashed changes

use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Instructore;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< Updated upstream
        // \App\Models\User::factory(10)->create();
=======
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
>>>>>>> Stashed changes
    }
}
