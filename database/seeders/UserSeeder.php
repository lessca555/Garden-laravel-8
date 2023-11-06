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
            'email' => 'admin@garden.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@garden.com',
            'password' => bcrypt('12345678'),
            'role' => 'user',
        ]);

        $user->assignRole('user');

        $receptionist = User::create([
            'name' => 'Receptionist Role',
            'email' => 'receptionist@garden.com',
            'password' => bcrypt('12345678'),
            'role' => 'receptionist',
        ]);

        $receptionist->assignRole('receptionist');
    }
}
