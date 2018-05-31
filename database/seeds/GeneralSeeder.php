<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Carbon\Carbon;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'remember_token' => NULL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
      ]);
      DB::table('roles')->insert([
        [
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
      ]);
      DB::table('permissions')->insert([
        [
            'name' => 'ver_usuarios',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'crear_usuario',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'editar_usuario',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'eliminar_usuario',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'ver_permisos',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'crear_permiso',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'editar_permiso',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'eliminar_permiso',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'ver_roles',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'crear_rol',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'editar_rol',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'eliminar_rol',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'ver_dashboard',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'ver_categorias',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'crear_categorias',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'editar_categorias',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'eliminar_categorias',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'ver_productos',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'crear_productos',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'editar_productos',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'eliminar_productos',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'ver_clientes',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'crear_clientes',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'editar_clientes',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'eliminar_clientes',
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]

      ]);
      DB::table('model_has_roles')->insert([
        [
            'role_id' => '1',
            'model_id' => '1',
            'model_type' => 'App\User',
        ],
      ]);
      DB::table('role_has_permissions')->insert([
        [
            'permission_id' => '1',
            'role_id' => '1',
        ],
        [
            'permission_id' => '2',
            'role_id' => '1',
        ],
        [
            'permission_id' => '3',
            'role_id' => '1',
        ],
        [
            'permission_id' => '4',
            'role_id' => '1',
        ],
        [
            'permission_id' => '5',
            'role_id' => '1',
        ],
        [
            'permission_id' => '6',
            'role_id' => '1',
        ],
        [
            'permission_id' => '7',
            'role_id' => '1',
        ],
        [
            'permission_id' => '8',
            'role_id' => '1',
        ],
        [
            'permission_id' => '9',
            'role_id' => '1',
        ],
        [
            'permission_id' => '10',
            'role_id' => '1',
        ],
        [
            'permission_id' => '11',
            'role_id' => '1',
        ],
        [
            'permission_id' => '12',
            'role_id' => '1',
        ],
        [
            'permission_id' => '13',
            'role_id' => '1',
        ],
        [
            'permission_id' => '14',
            'role_id' => '1',
        ],
        [
            'permission_id' => '15',
            'role_id' => '1',
        ],
        [
            'permission_id' => '16',
            'role_id' => '1',
        ],
        [
            'permission_id' => '17',
            'role_id' => '1',
        ],
        [
            'permission_id' => '18',
            'role_id' => '1',
        ],
        [
            'permission_id' => '19',
            'role_id' => '1',
        ],
        [
            'permission_id' => '20',
            'role_id' => '1',
        ],
        [
            'permission_id' => '21',
            'role_id' => '1',
        ],
        [
            'permission_id' => '22',
            'role_id' => '1',
        ],
        [
            'permission_id' => '23',
            'role_id' => '1',
        ],
        [
            'permission_id' => '24',
            'role_id' => '1',
        ],
        [
            'permission_id' => '25',
            'role_id' => '1',
        ]

      ]);
    }
}
