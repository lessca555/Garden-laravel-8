<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@test.com',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@test.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('user');

        $receptionist = User::create([
            'name' => 'Receptionist Role',
            'email' => 'receptionist@test.com',
            'password' => bcrypt('12345678')
        ]);

        $receptionist->assignRole('receptionist');
    }
}