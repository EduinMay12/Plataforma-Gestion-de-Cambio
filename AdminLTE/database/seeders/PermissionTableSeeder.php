<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            'vista-home',
            'vista-administrador',

            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'eliminar-usuarios',

            'ver-etiqueta',
            'crear-etiqueta',
            'editar-etiqueta',
            'eliminar-etiqueta',

            'ver-gestion-empresa',
            'crear-gestion-empresa',
            'editar-gestion-empresa',
            'eliminar-gestion-empresa',

            'ver-gestion-sucursal',
            'crear-gestion-sucursal',
            'editar-gestion-sucursal',
            'eliminar-gestion-sucursal',

            'ver-comunicacion',
            'crear-comunicacion',
            'editar-comunicacion',
            'eliminar-comunicacion',

            'ver-elemento',
            'crear-elemento',
            'editar-elemento',
            'eliminar-elemento',

            'ver-campaña',
            'crear-campaña',
            'editar-campaña',
            'eliminar-campaña'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
