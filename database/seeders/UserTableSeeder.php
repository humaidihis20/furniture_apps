<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin  = User::create([
            'name' => 'Admin',
            'email' => 'admin_adp@gmail.com',
            'password' => bcrypt('P4ssw0rd'),
        ]);
        $admin->assignRole('admin');
    }
}
