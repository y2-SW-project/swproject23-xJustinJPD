<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // get admin role and later attach this role to a user
                $role_admin = Role::where('name', 'admin')->first();

                // get user role and later attach this role to a user
                $role_user = Role::where('name', 'user')->first();
        
        
                $admin = new User();
                $admin->name = 'Justin Perry Doyle';
                $admin->email = 'justinperrydoyle@gmail.com';
                $admin->password = Hash::make('password');
                $admin->save();
        
                // attach admin role
                $admin->roles()->attach($role_admin);
        
        
        
                $user = new User();
                $user->name = 'Sophie Roche';
                $user->email = 'sophiekroche@gmail.com';
                $user->password = Hash::make('password');
                $user->save();
        
                // attach user role
                $user->roles()->attach($role_user);
    }
}
