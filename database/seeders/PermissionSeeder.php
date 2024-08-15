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

        // Meeting Permission
        $permission_rapat_list = Permission::updateOrCreate(
            [
                'name' => 'rapat-list',
            ],
            ['name' => 'rapat-list']
        );
        $permission_rapat_edit = Permission::updateOrCreate(
            [
                'name' => 'rapat-edit',
            ],
            ['name' => 'rapat-edit']
        );
        $permission_rapat_detail = Permission::updateOrCreate(
            [
                'name' => 'rapat-detail',
            ],
            ['name' => 'rapat-detail']
        );
        $permission_rapat_detail_edit = Permission::updateOrCreate(
            [
                'name' => 'rapat-detail-edit',
            ],
            ['name' => 'rapat-detail-edit']
        );
        $permission_rapat_delete = Permission::updateOrCreate(
            [
                'name' => 'rapat-delete',
            ],
            ['name' => 'rapat-delete']
        );
        $permission_rapat_create = Permission::updateOrCreate(
            [
                'name' => 'rapat-create',
            ],
            ['name' => 'rapat-create']
        );

        //Borrow Permission
        $permission_peminjaman_list = Permission::updateOrCreate(
            [
                'name' => 'peminjaman-list',
            ],
            ['name' => 'peminjaman-list']
        );
        $permission_peminjaman_status = Permission::updateOrCreate(
            [
                'name' => 'peminjaman-status',
            ],
            ['name' => 'peminjaman-status']
        );
        $permission_peminjaman_delete = Permission::updateOrCreate(
            [
                'name' => 'peminjaman-delete',
            ],
            ['name' => 'peminjaman-delete']
        );

        //Category Permission
        $permission_kategori_list = Permission::updateOrCreate(
            [
                'name' => 'kategori-list',
            ],
            ['name' => 'kategori-list']
        );
        $permission_kategori_create = Permission::updateOrCreate(
            [
                'name' => 'kategori-create',
            ],
            ['name' => 'kategori-create']
        );
        $permission_kategori_edit = Permission::updateOrCreate(
            [
                'name' => 'kategori-edit',
            ],
            ['name' => 'kategori-edit']
        );
        $permission_kategori_delete = Permission::updateOrCreate(
            [
                'name' => 'kategori-delete',
            ],
            ['name' => 'kategori-delete']
        );

        //Evote Permission
        $permission_evote_dashboard = Permission::updateOrCreate(
            [
                'name' => 'evote-dashboard',
            ],
            ['name' => 'evote-dashboard']
        );
        $permission_evote_setting = Permission::updateOrCreate(
            [
                'name' => 'evote-setting',
            ],
            ['name' => 'evote-setting']
        );

        //ExternalAspiration Permission
        $permission_aspirasi_external_list = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-external-list',
            ],
            ['name' => 'aspirasi-external-list']
        );
        $permission_aspirasi_external_create = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-external-create',
            ],
            ['name' => 'aspirasi-external-create']
        );
        $permission_aspirasi_external_edit = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-external-edit',
            ],
            ['name' => 'aspirasi-external-edit']
        );
        $permission_aspirasi_external_delete = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-external-delete',
            ],
            ['name' => 'aspirasi-external-delete']
        );

        //InternalAspiration Permission
        $permission_aspirasi_internal_list = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-internal-list',
            ],
            ['name' => 'aspirasi-internal-list']
        );
        $permission_aspirasi_internal_create = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-internal-create',
            ],
            ['name' => 'aspirasi-internal-create']
        );
        $permission_aspirasi_internal_edit = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-internal-edit',
            ],
            ['name' => 'aspirasi-internal-edit']
        );
        $permission_aspirasi_internal_delete = Permission::updateOrCreate(
            [
                'name' => 'aspirasi-internal-delete',
            ],
            ['name' => 'aspirasi-internal-delete']
        );

        //Item Permission
        $permission_item_list = Permission::updateOrCreate(
            [
                'name' => 'item-list',
            ],
            ['name' => 'item-list']
        );
        $permission_item_create = Permission::updateOrCreate(
            [
                'name' => 'item-create',
            ],
            ['name' => 'item-create']
        );
        $permission_item_edit = Permission::updateOrCreate(
            [
                'name' => 'item-edit',
            ],
            ['name' => 'item-edit']
        );
        $permission_item_delete = Permission::updateOrCreate(
            [
                'name' => 'item-delete',
            ],
            ['name' => 'item-delete']
        );

        //Candidate Permission
        $permission_candidate_all = Permission::updateOrCreate(
            [
                'name' => 'candidate-all',
            ],
            ['name' => 'candidate-all']
        );

        //MeetingCategory Permission
        $permission_kategori_rapat_list = Permission::updateOrCreate(
            [
                'name' => 'kategori-rapat-list',
            ],
            ['name' => 'kategori-rapat-list']
        );
        $permission_kategori_rapat_create = Permission::updateOrCreate(
            [
                'name' => 'kategori-rapat-create',
            ],
            ['name' => 'kategori-rapat-create']
        );
        $permission_kategori_rapat_edit = Permission::updateOrCreate(
            [
                'name' => 'kategori-rapat-edit',
            ],
            ['name' => 'kategori-rapat-edit']
        );
        $permission_kategori_rapat_delete = Permission::updateOrCreate(
            [
                'name' => 'kategori-rapat-delete',
            ],
            ['name' => 'kategori-rapat-delete']
        );

        //Photo Permission
        $permission_photo_create = Permission::updateOrCreate(
            [
                'name' => 'photo-create',
            ],
            ['name' => 'photo-create']
        );
        $permission_photo_delete = Permission::updateOrCreate(
            [
                'name' => 'photo-delete',
            ],
            ['name' => 'photo-delete']
        );

        //Post Permission
        $permission_postingan_list = Permission::updateOrCreate(
            [
                'name' => 'postingan-list',
            ],
            ['name' => 'postingan-list']
        );
        $permission_postingan_create = Permission::updateOrCreate(
            [
                'name' => 'postingan-create',
            ],
            ['name' => 'postingan-create']
        );
        $permission_postingan_edit = Permission::updateOrCreate(
            [
                'name' => 'postingan-edit',
            ],
            ['name' => 'postingan-edit']
        );
        $permission_postingan_delete = Permission::updateOrCreate(
            [
                'name' => 'postingan-delete',
            ],
            ['name' => 'postingan-delete']
        );

        //Tag Permission
        $permission_tag_list = Permission::updateOrCreate(
            [
                'name' => 'tag-list',
            ],
            ['name' => 'tag-list']
        );
        $permission_tag_create = Permission::updateOrCreate(
            [
                'name' => 'tag-create',
            ],
            ['name' => 'tag-create']
        );
        $permission_tag_edit = Permission::updateOrCreate(
            [
                'name' => 'tag-edit',
            ],
            ['name' => 'tag-edit']
        );
        $permission_tag_delete = Permission::updateOrCreate(
            [
                'name' => 'tag-delete',
            ],
            ['name' => 'tag-delete']
        );

        //Unit Permission
        $permission_unit_list = Permission::updateOrCreate(
            [
                'name' => 'unit-list',
            ],
            ['name' => 'unit-list']
        );
        $permission_unit_create = Permission::updateOrCreate(
            [
                'name' => 'unit-create',
            ],
            ['name' => 'unit-create']
        );
        $permission_unit_edit = Permission::updateOrCreate(
            [
                'name' => 'unit-edit',
            ],
            ['name' => 'unit-edit']
        );
        $permission_unit_delete = Permission::updateOrCreate(
            [
                'name' => 'unit-delete',
            ],
            ['name' => 'unit-delete']
        );

        //Users Permission
        $permission_user_list = Permission::updateOrCreate(
            [
                'name' => 'user-list',
            ],
            ['name' => 'user-list']
        );
        $permission_user_create = Permission::updateOrCreate(
            [
                'name' => 'user-create',
            ],
            ['name' => 'user-create']
        );
        $permission_user_edit = Permission::updateOrCreate(
            [
                'name' => 'user-edit',
            ],
            ['name' => 'user-edit']
        );
        $permission_user_delete = Permission::updateOrCreate(
            [
                'name' => 'user-delete',
            ],
            ['name' => 'user-delete']
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
        $role_admin->givePermissionTo($permission_rapat_edit);
        $role_admin->givePermissionTo($permission_rapat_delete);
        $role_admin->givePermissionTo($permission_rapat_detail_edit);

        $role_admin->givePermissionTo($permission_peminjaman_list);
        $role_admin->givePermissionTo($permission_peminjaman_status);
        $role_admin->givePermissionTo($permission_peminjaman_delete);

        $role_admin->givePermissionTo($permission_kategori_list);
        $role_admin->givePermissionTo($permission_kategori_create);
        $role_admin->givePermissionTo($permission_kategori_edit);
        $role_admin->givePermissionTo($permission_kategori_delete);

        $role_admin->givePermissionTo($permission_evote_dashboard);
        $role_admin->givePermissionTo($permission_evote_setting);

        $role_admin->givePermissionTo($permission_aspirasi_external_list);
        $role_admin->givePermissionTo($permission_aspirasi_external_create);
        $role_admin->givePermissionTo($permission_aspirasi_external_edit);
        $role_admin->givePermissionTo($permission_aspirasi_external_delete);

        $role_admin->givePermissionTo($permission_aspirasi_internal_list);
        $role_admin->givePermissionTo($permission_aspirasi_internal_create);
        $role_admin->givePermissionTo($permission_aspirasi_internal_edit);
        $role_admin->givePermissionTo($permission_aspirasi_internal_delete);

        $role_admin->givePermissionTo($permission_item_list);
        $role_admin->givePermissionTo($permission_item_create);
        $role_admin->givePermissionTo($permission_item_edit);
        $role_admin->givePermissionTo($permission_item_delete);

        $role_admin->givePermissionTo($permission_candidate_all);

        $role_admin->givePermissionTo($permission_kategori_rapat_list);
        $role_admin->givePermissionTo($permission_kategori_rapat_create);
        $role_admin->givePermissionTo($permission_kategori_rapat_edit);
        $role_admin->givePermissionTo($permission_kategori_rapat_delete);

        $role_admin->givePermissionTo($permission_photo_create);
        $role_admin->givePermissionTo($permission_photo_delete);

        $role_admin->givePermissionTo($permission_postingan_list);
        $role_admin->givePermissionTo($permission_postingan_create);
        $role_admin->givePermissionTo($permission_postingan_edit);
        $role_admin->givePermissionTo($permission_postingan_delete);

        $role_admin->givePermissionTo($permission_tag_list);
        $role_admin->givePermissionTo($permission_tag_create);
        $role_admin->givePermissionTo($permission_tag_edit);
        $role_admin->givePermissionTo($permission_tag_delete);

        $role_admin->givePermissionTo($permission_unit_list);
        $role_admin->givePermissionTo($permission_unit_create);
        $role_admin->givePermissionTo($permission_unit_edit);
        $role_admin->givePermissionTo($permission_unit_delete);

        $role_admin->givePermissionTo($permission_user_list);
        $role_admin->givePermissionTo($permission_user_create);
        $role_admin->givePermissionTo($permission_user_edit);
        $role_admin->givePermissionTo($permission_user_delete);

        $user = User::find(1);

        $user->assignRole('admin');
    }
}
