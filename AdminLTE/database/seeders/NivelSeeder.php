<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nivels')->insert([
            'nombre' => 'Básico',
        ]);

        DB::table('nivels')->insert([
            'nombre' => 'Calificado',
        ]);

        DB::table('nivels')->insert([
            'nombre' => 'Experimentado',
        ]);
    }
}
