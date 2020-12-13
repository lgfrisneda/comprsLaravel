<?php

use App\User;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'addresses.index']);
        Permission::create(['name' => 'products.index']);
        Permission::create(['name' => 'orders.index']);

        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'addresses.show']);
        Permission::create(['name' => 'orders.show']);

        $admin = Role::create(['name' => 'Administrador']);

        $admin->givePermissionTo([
            'users.index',
            'addresses.index',
            'products.index',
            'orders.index'
        ]);

        $cliente = Role::create(['name' => 'Cliente']);

        $cliente->givePermissionTo([
            'users.show',
            'addresses.show',
            'orders.show'
        ]);

        $userCliente = User::find(1);
        $userCliente->assignRole('Cliente');

        $userAdmin = User::find(2);
        $userAdmin->assignRole('Administrador');
    }
}
