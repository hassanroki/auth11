<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// Insert Data using Seeder
DB::table('users')->insert([
    // Admin
    [
        'name'      => 'Admin',
        'username'  => 'admin',
        'email'     => 'admin@gmail.com',
        'password'  => Hash::make('admin'),
        'role'      => 'admin',
        'status'    => 'active',
    ],
    // User
    [
        'name'      => 'User',
        'username'  => 'user',
        'email'     => 'user@gmail.com',
        'password'  => Hash::make('user'),
        'role'      => 'user',
        'status'    => 'active',
    ],
]);
    
    }
}
