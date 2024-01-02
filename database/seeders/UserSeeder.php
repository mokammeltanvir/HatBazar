<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'name' => 'System Admin',
            'username' => 'systemadmin',
            'email' => 'admin@hatbazar.com',
            'role' => 'admin',
            'status' => 'active',
            'password' => Hash::make('admin2024')
        ],
        [
            'name' => 'Vendor User',
            'username' => 'vendoruser',
            'email' => 'vendor@hatbazar.com',
            'role' => 'vendor',
            'status' => 'active',
            'password' => Hash::make('vendor2024')
        ],
        [
            'name' => 'Customer User',
            'username' => 'customeruser',
            'email' => 'user@hatbazar.com',
            'role' => 'user',
            'status' => 'active',
            'password' => Hash::make('user2024')
        ]
        ]);
    }
}
