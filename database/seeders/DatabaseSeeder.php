<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Backpack\PermissionManager\app\Models\Permission;
use Backpack\PermissionManager\app\Models\Role;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $admin_user = User::create([
      'name' => 'Admin',
      'email' => 'admin@admin.com',
      'password' => Hash::make('password')
      ]);
      $admin_role = Role::create([
        'name' => 'Administrator'
      ]);
      Permission::create([
        'name' => 'edit_users'
      ]);
      Permission::create([
        'name' => 'edit_roles'
      ]);
      Permission::create([
        'name' => 'edit_radcheck'
      ]);
      Permission::create([
        'name' => 'edit_radreply'
      ]);
      Permission::create([
        'name' => 'edit_nas'
      ]);
      Permission::create([
        'name' => 'view_radacct'
      ]);
      Permission::create([
        'name' => 'view_radpostauth'
      ]);
      $admin_role->givePermissionTo(Permission::all());
      $admin_user->assignRole('Administrator');
    }
}
