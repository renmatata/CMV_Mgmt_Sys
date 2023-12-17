<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('admin12345');
        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Admin',
                'username' => 'admin',
                'type' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => $password,
                'status' => 1
            ],
        ];
        Admin::insert($adminRecords);
    }
}
