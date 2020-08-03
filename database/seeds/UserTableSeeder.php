<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
             'name' => 'Admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('123456789')
        ]);

        $admin->roles()->attach($adminRole);

        $user = User::create([
            'name' => 'Manith',
            'email' => 'Manith@gmail.com',
            'password' => bcrypt('123456789')
        ]); 


        $user->roles()->attach($userRole);


    }
}
