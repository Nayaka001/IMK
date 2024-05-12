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
            'id_user' => Str::uuid(),
            'level_user' => 'Kasir',
            'created_at' => now(),
            'username' => 'dira1810',
            'password' => Hash::make('Dira1810'),
        ]);

    }
}
