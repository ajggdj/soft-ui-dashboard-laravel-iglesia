<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $editorRole = Role::create(['name' => 'editor']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $viewPosts = Permission::create(['name' => 'view posts']);
        $editPosts = Permission::create(['name' => 'edit posts']);
        $deletePosts = Permission::create(['name' => 'delete posts']);

        $user = User::find(1);
$user->assignRole('admin');
$user = User::find(2);
$user->assignRole('editor');
    }
}
