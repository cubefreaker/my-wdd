<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Undangan;
use App\Models\UndanganGroup;
use App\Models\User;
use App\Models\UserUndanganDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createUserAndRolePermission();
        $this->createUndanganGroup();
        $this->createUndangan();
        $this->createUndanganDetail();
    }

    function createUserAndRolePermission()
    {
        $userSuperAdmin = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superadmin123'),
        ]);
        $userAdmin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
        ]);

        $permissionViewUser = Permission::create(['name' => 'View Users']);
        $permissionCreateUser = Permission::create(['name' => 'Create Users']);
        $permissionUpdateUser = Permission::create(['name' => 'Update Users']);
        $permissionDeleteUser = Permission::create(['name' => 'Delete Users']);
        $permissionViewUndanganGroup = Permission::create(['name' => 'View Undangan Group']);
        $permissionCreateUndanganGroup = Permission::create(['name' => 'Create Undangan Group']);
        $permissionUpdateUndanganGroup = Permission::create(['name' => 'Update Undangan Group']);
        $permissionDeleteUndanganGroup = Permission::create(['name' => 'Delete Undangan Group']);
        $permissionViewUndangan = Permission::create(['name' => 'View Undangan']);
        $permissionCreateUndangan = Permission::create(['name' => 'Create Undangan']);
        $permissionUpdateUndangan = Permission::create(['name' => 'Update Undangan']);
        $permissionDeleteUndangan = Permission::create(['name' => 'Delete Undangan']);
        $permissionViewUserUndangan = Permission::create(['name' => 'View User Undangan']);
        $permissionCreateUserUndangan = Permission::create(['name' => 'Create User Undangan']);
        $permissionUpdateUserUndangan = Permission::create(['name' => 'Update User Undangan']);
        $permissionDeleteUserUndangan = Permission::create(['name' => 'Delete User Undangan']);

        $roleSuperAdmin = Role::create(['name' => 'Super Admin']);
        $roleAdmin = Role::create(['name' => 'Admin']);

        $roleAdmin->givePermissionTo($permissionViewUser);
        $roleAdmin->givePermissionTo($permissionCreateUser);
        $roleAdmin->givePermissionTo($permissionUpdateUser);
        $roleAdmin->givePermissionTo($permissionDeleteUser);
        $roleAdmin->givePermissionTo($permissionViewUndanganGroup);
        $roleAdmin->givePermissionTo($permissionCreateUndanganGroup);
        $roleAdmin->givePermissionTo($permissionUpdateUndanganGroup);
        $roleAdmin->givePermissionTo($permissionDeleteUndanganGroup);
        $roleAdmin->givePermissionTo($permissionViewUndangan);
        $roleAdmin->givePermissionTo($permissionCreateUndangan);
        $roleAdmin->givePermissionTo($permissionUpdateUndangan);
        $roleAdmin->givePermissionTo($permissionDeleteUndangan);
        $roleAdmin->givePermissionTo($permissionViewUserUndangan);
        $roleAdmin->givePermissionTo($permissionCreateUserUndangan);
        $roleAdmin->givePermissionTo($permissionUpdateUserUndangan);
        $roleAdmin->givePermissionTo($permissionDeleteUserUndangan);

        $userSuperAdmin->assignRole($roleSuperAdmin);
        $userAdmin->assignRole($roleAdmin);
    }

    function createUndanganGroup()
    {
        UndanganGroup::create([
            'id' => 1,
            'nama_undangan_group' => 'Gratis',
            'price_amount' => 0,
            'status' => 'active',
        ]);

        UndanganGroup::create([
            'id' => 2,
            'nama_undangan_group' => 'Paket Hemat',
            'price_amount' => 20000,
            'status' => 'active',
        ]);

        UndanganGroup::create([
            'id' => 3,
            'nama_undangan_group' => 'Paket Lengkap',
            'price_amount' => 50000,
            'status' => 'active',
        ]);
    }

    function createUndangan()
    {
        Undangan::create([
            'undangan_group_id' => 1,
            'nama_undangan' => 'Tema 1',
            // 'thumbnail_undangan' => '/images/thumbnail/theme1.png',
            'laravel_controller_class' => '\App\Http\Livewire\Theme\Theme1',
            'status' => 'active',
        ]);

        Undangan::create([
            'undangan_group_id' => 2,
            'nama_undangan' => 'Tema 2',
            'laravel_controller_class' => '\App\Http\Livewire\Theme\Wisnu\Tema1',
            'status' => 'active',
        ]);

        Undangan::create([
            'undangan_group_id' => 3,
            'nama_undangan' => 'Tema 3',
            'laravel_controller_class' => '\App\Http\Livewire\Theme\Tio\Tema1',
            'status' => 'active',
        ]);
    }

    function createUndanganDetail()
    {
        $undanganDetail = UserUndanganDetail::create([
            'id' => 1,
            'is_sample' => 1,
            'user_id' => 1,
            'undangan_id' => 1,
            'groom_name' => 'Romeo Montague',
            'bride_name' => 'Juliet Capulet',
            'groom_parent_text' => 'Putra pertama dari Bapak Montague dan Ibu Montague',
            'bride_parent_text' => 'Putri pertama dari Bapak Capulet dan Ibu Capulet',
            'date_akad' => '2024-01-01',
            'time_akad_start' => '08:00',
            'time_akad_end' => '09:00',
            'date_resepsi' => '2024-01-01',
            'time_resepsi_start' => '10:00',
            'time_resepsi_end' => '12:00',
            'date_unduhmantu' => '2024-01-02',
            'time_unduhmantu_start' => '10:00',
            'time_unduhmantu_end' => '12:00',
            'address_akad' => 'Jl. Raya Bogor KM 30, Depok',
            'address_resepsi' => 'Jl. Raya Bogor KM 30, Depok',
            'address_unduhmantu' => 'Jl. Raya Bogor KM 33, Depok',
            'map_akad_latlng' => '-6.377322693764234, 106.86856668932829',
            'map_resepsi_latlng' => '-6.377322693764234, 106.86856668932829',
            'map_unduhmantu_latlng' => '-6.392710940811574, 106.86492156314091',
            'gmap_akad_url' => 'https://goo.gl/maps/i6VyY5wJ2GwsKTCY8',
            'gmap_resepsi_url' => 'https://goo.gl/maps/i6VyY5wJ2GwsKTCY8',
            'gmap_unduhmantu_url' => 'https://goo.gl/maps/HXYcd13PioPiCvzs9',
        ]);

        $undanganDetail->addMedia(public_path('audio/backsound.mp3'))->toMediaCollection('undanganDetailBacksound');
    }
}
