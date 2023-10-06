<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '123-456-7890',
            'address' => '456 Another Street',
            'password' => bcrypt('admin123'),
            'role' => 1
        ]);
    }
}
