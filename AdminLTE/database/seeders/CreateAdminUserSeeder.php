<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloAdministrador\Sucursales;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'avatar' => 'admin.png',
            'name' => 'Administrador',
            'apellido' => '',
            'tipo' => 'Administrador',
            'puesto_actual_id' => 'Administrador',
            'email' => 'admin@admin.com',
            'estatus' => '3',
            'password' => bcrypt('admin')
        ]);

        $role = Role::create([
            'name' => 'Administrador',
            'color' => '#14DD5A',
            'description' => 'Administrador del sistema'
        ]);
        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
        //-------------------------------------------------------
        $user = User::create([
            'avatar' => 'participante.png',
            'name' => 'José Ricardo Cauich Mis',
            'apellido' => '',
            'tipo' => 'Participante',
            'puesto_actual_id' => 'Participante',
            'email' => 'participante@participante.com',
            'estatus' => '4',
            'password' => bcrypt('participante')
        ]);

        $role = Role::create([
            'name' => 'Participante',
            'color' => '#14DD5A',
            'description' => 'Participante para evaluar'
        ]);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

                //-------------------------------------------------------
                $user = User::create([
                    'avatar' => 'evaluador.png',
                    'name' => 'José Rodrigo Mendez Herrera',
                    'apellido' => '',
                    'tipo' => 'Evaluador',
                    'puesto_actual_id' => 'Evaluador',
                    'email' => 'evaluador@evaluador.com',
                    'estatus' => '2',
                    'password' => bcrypt('evaluador')
                ]);
        
                $role = Role::create([
                    'name' => 'Evaluador',
                    'color' => '#14DD5A',
                    'description' => 'Evaluador de participantes'
                ]);
        
                $permissions = Permission::pluck('id','id')->all();
        
                $role->syncPermissions($permissions);
        
                $user->assignRole([$role->id]);

    }
}
