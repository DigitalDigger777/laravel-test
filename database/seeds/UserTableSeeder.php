<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleRoot = Role::where('name', 'root')->first();
        $roleAdmin  = Role::where('name', 'admin')->first();
        $roleManager  = Role::where('name', 'manager')->first();
        $roleUser  = Role::where('name', 'user')->first();

        $rootUser = new User();
        $rootUser->name = 'Root User';
        $rootUser->email = 'root@example.com';
        $rootUser->password = bcrypt('1root!');
        $rootUser->save();
        $rootUser->roles()->attach($roleRoot);

        $userAdmin = new User();
        $userAdmin->name = 'Admin User';
        $userAdmin->email = 'admin@example.com';
        $userAdmin->password = bcrypt('1admin!');
        $userAdmin->save();
        $userAdmin->roles()->attach($roleAdmin);

        $userManager = new User();
        $userManager->name = 'Manager User';
        $userManager->email = 'manager@example.com';
        $userManager->password = bcrypt('1manager!');
        $userManager->save();
        $userManager->roles()->attach($roleManager);

        $userUser = new User();
        $userUser->name = 'Simple User';
        $userUser->email = 'user@example.com';
        $userUser->password = bcrypt('1user!');
        $userUser->save();
        $userUser->roles()->attach($roleUser);
    }
}
