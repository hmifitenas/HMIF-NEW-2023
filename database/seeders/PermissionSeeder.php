<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin',
            ],
            ['name' => 'admin']
        );

        $role_user = Role::updateOrCreate(
            [
                'name' => 'user',
            ],
            ['name' => 'user']
        );
        // Dashboard Permission
        $permission_dashboard = Permission::updateOrCreate(
            [
                'name' => 'dashboard',
            ],
            ['name' => 'dashboard']
        );

        // Album Permission
        $permission_album_list = Permission::updateOrCreate(
            [
                'name' => 'album-list',
            ],
            ['name' => 'album-list']
        );
        $permission_album_create = Permission::updateOrCreate(
            [
                'name' => 'album-create',
            ],
            ['name' => 'album-create']
        );
        $permission_album_edit = Permission::updateOrCreate(
            [
                'name' => 'album-edit',
            ],
            ['name' => 'album-edit']
        );
        $permission_album_delete = Permission::updateOrCreate(
            [
                'name' => 'album-delete',
            ],
            ['name' => 'album-delete']
        );
        $permission_album_show = Permission::updateOrCreate(
            [
                'name' => 'album-show',
            ],
            ['name' => 'album-show']
        );

        // Role Permission
        $permission_role_list = Permission::updateOrCreate(
            [
                'name' => 'role-list',
            ],
            ['name' => 'role-list']
        );
        $permission_role_create = Permission::updateOrCreate(
            [
                'name' => 'role-create',
            ],
            ['name' => 'role-create']
        );
        $permission_role_edit = Permission::updateOrCreate(
            [
                'name' => 'role-edit',
            ],
            ['name' => 'role-edit']
        );
        $permission_role_delete = Permission::updateOrCreate(
            [
                'name' => 'role-delete',
            ],
            ['name' => 'role-delete']
        );

        // Permission Permission
        $permission_permission_list = Permission::updateOrCreate(
            [
                'name' => 'permission-list',
            ],
            ['name' => 'permission-list']
        );
        $permission_permission_create = Permission::updateOrCreate(
            [
                'name' => 'permission-create',
            ],
            ['name' => 'permission-create']
        );
        $permission_permission_edit = Permission::updateOrCreate(
            [
                'name' => 'permission-edit',
            ],
            ['name' => 'permission-edit']
        );
        $permission_permission_delete = Permission::updateOrCreate(
            [
                'name' => 'permission-delete',
            ],
            ['name' => 'permission-delete']
        );
        
        // Permission Permission
        $permission_rapat_list = Permission::updateOrCreate(
            [
                'name' => 'rapat-list',
            ],
            ['name' => 'rapat-list']
        );
        $permission_rapat_detail = Permission::updateOrCreate(
            [
                'name' => 'rapat-detail',
            ],
            ['name' => 'rapat-detail']
        );
        $permission_rapat_create = Permission::updateOrCreate(
            [
                'name' => 'rapat-create',
            ],
            ['name' => 'rapat-create']
        );

        $role_admin->givePermissionTo($permission_dashboard);

        $role_admin->givePermissionTo($permission_album_list);
        $role_admin->givePermissionTo($permission_album_create);
        $role_admin->givePermissionTo($permission_album_edit);
        $role_admin->givePermissionTo($permission_album_delete);
        $role_admin->givePermissionTo($permission_album_show);

        $role_admin->givePermissionTo($permission_role_create);
        $role_admin->givePermissionTo($permission_role_edit);
        $role_admin->givePermissionTo($permission_role_delete);
        $role_admin->givePermissionTo($permission_role_list);

        $role_admin->givePermissionTo($permission_permission_create);
        $role_admin->givePermissionTo($permission_permission_edit);
        $role_admin->givePermissionTo($permission_permission_delete);
        $role_admin->givePermissionTo($permission_permission_list);

        $role_admin->givePermissionTo($permission_rapat_list);
        $role_admin->givePermissionTo($permission_rapat_detail);
        $role_admin->givePermissionTo($permission_rapat_create);

        $user = User::find(1);

        $user->assignRole('admin');
    }
}
