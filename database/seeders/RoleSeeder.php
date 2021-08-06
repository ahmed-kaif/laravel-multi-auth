<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // here you can seed the roles you want

        $role = new Role();
        $role->title = 'super-admin';
        $role->save();

        $role = new Role();
        $role->title = 'admin';
        $role->save();

        $role = new Role();
        $role->title = 'user';
        $role->save();
    }
}
