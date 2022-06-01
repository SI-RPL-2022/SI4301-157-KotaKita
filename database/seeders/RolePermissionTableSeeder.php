<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'user-view']);
        Permission::create(['name' => 'user-edit']);
        Permission::create(['name' => 'user-delete']);
        Permission::create(['name' => 'profile-view']);
        Permission::create(['name' => 'profile-edit']);
        Permission::create(['name' => 'dashboard-view']);
        Permission::create(['name' => 'kota-view']);
        Permission::create(['name' => 'kota-create']);
        Permission::create(['name' => 'kota-edit']);
        Permission::create(['name' => 'kota-delete']);
        Permission::create(['name' => 'proyek-view']);
        Permission::create(['name' => 'proyek-create']);
        Permission::create(['name' => 'proyek-detail']);
        Permission::create(['name' => 'fase-view']);
        Permission::create(['name' => 'fase-create']);
        Permission::create(['name' => 'document-view']);
        Permission::create(['name' => 'aduan-create']);
        Permission::create(['name' => 'fasilitas-view']);
        Permission::create(['name' => 'fasilitas-edit']);
        Permission::create(['name' => 'feedback-create']);

        $radmin = Role::findByName('admin')->first();
        $radmin->givePermissionTo(['profile-view','profile-edit','dashboard-view','kota-view','kota-create','kota-edit','kota-delete','proyek-view','proyek-create','proyek-detail','fase-view','fase-create','document-view','aduan-create','fasilitas-view','fasilitas-edit','feedback-create']);

        $ruser = Role::findByName('user');
        $ruser->givePermissionTo('profile-view','profile-edit','dashboard-view','kota-view','aduan-create','feedback-create','document-view');
    }
}
