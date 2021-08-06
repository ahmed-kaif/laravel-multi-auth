<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating 3 dummy users: Super Admin, Admin & User

        $user = new User();
        $user->name = "Super Admin";
        $user->email = "super-admin@email.com";
        $user->password = Hash::make('123456789');
        $user->save();
        //assigning Super Admin Role
        $role = Role::where('title','super-admin')->first();
        $user->roles()->syncWithoutDetaching($role);

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@email.com";
        $user->password = Hash::make('123456789');
        $user->save();
        //assigning Admin Role
        $role = Role::where('title','admin')->first();
        $user->roles()->syncWithoutDetaching($role);

        $user = new User();
        $user->name = "Mr. User";
        $user->email = "user@email.com";
        $user->password = Hash::make('123456789');
        $user->save();
        //assigning User Role
        $role = Role::where('title','user')->first();
        $user->roles()->syncWithoutDetaching($role);



    }
}
