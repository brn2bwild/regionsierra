<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'crear recursos']);
        Permission::create(['name' => 'editar recursos']);
        Permission::create(['name' => 'borrar recursos']);
        Permission::create(['name' => 'publicar recursos']);

        // create roles and assign existing permissions
        $editor = Role::create(['name' => 'editor']);
        $editor->givePermissionTo('editar recursos');
        $editor->givePermissionTo('borrar recursos');

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('crear recursos');
        $admin->givePermissionTo('editar recursos');
        $admin->givePermissionTo('borrar recursos');
        $admin->givePermissionTo('publicar recursos');

        $super_admin = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($editor);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($super_admin);
    }
}
