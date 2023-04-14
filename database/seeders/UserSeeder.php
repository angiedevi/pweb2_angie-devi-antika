<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Angie Devi Antika',
            'email' => 'angieantika1001@gmail.com',
            'password' => Hash::make('admin123'),
            'level' => 'creator',
        ]);

        User::create([
            'name' => 'Devi Antika',
            'email' => 'alvin.yrhm12@gmail.com',
            'password' => Hash::make('devi123'),
            'level' => 'pengunjung',
        ]);
    }
}

//coba user