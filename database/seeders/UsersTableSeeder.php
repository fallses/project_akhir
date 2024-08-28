<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'role' => 0,
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
        ]);

        // Anda dapat menambahkan lebih banyak pengguna jika diperlukan
    }
}
