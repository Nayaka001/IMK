<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menjalankan seeder User
        DB::table('users')->insert([
            [
                'id_user' => Str::uuid(),
                'level_user' => 'Kasir',
                'created_at' => now(),
                'username' => 'nayaka1810',
                'password' => Hash::make('Naya1810'),
            ],
            [
                'id_user' => Str::uuid(),
                'level_user' => 'Admin',
                'created_at' => now(),
                'username' => 'fildza1810',
                'password' => Hash::make('Fildza1810'),
            ],
            [
                'id_user' => Str::uuid(),
                'level_user' => 'Kitchen',
                'created_at' => now(),
                'username' => 'sadtria1810',
                'password' => Hash::make('Sadtria1810'),
            ],
            [
                'id_user' => Str::uuid(),
                'level_user' => 'Bartender',
                'created_at' => now(),
                'username' => 'khairunisa1810',
                'password' => Hash::make('Khairunisa1810'),
            ],
            [
                'id_user' => Str::uuid(),
                'level_user' => 'Pelayan',
                'created_at' => now(),
                'username' => 'pelangi1810',
                'password' => Hash::make('Pelangi1810'),
            ],
            [
                'id_user' => Str::uuid(),
                'level_user' => 'Pelayan',
                'created_at' => now(),
                'username' => 'shanda1810',
                'password' => Hash::make('Shanda1810'),
            ]
        ]);

    }
}
