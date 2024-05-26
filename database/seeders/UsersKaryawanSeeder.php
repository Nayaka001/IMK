<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersKaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'nayaka1810',
                'password' => 'Naya1810',
                'level_user' => 'Kasir',
                'nama' => 'Nayaka',     
                'tgl_lahir' => '1990-10-18',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Mawar No. 10, Jakarta',
                'gaji' => 5000000,
            ],
            [
                'username' => 'fildza1810',
                'password' => 'Fildza1810',
                'level_user' => 'Admin',
                'nama' => 'Fildza',
                'tgl_lahir' => '1992-10-18',
                'no_hp' => '081234567891',
                'alamat' => 'Jl. Melati No. 20, Bandung',
                'gaji' => 6000000,
            ],
            [
                'username' => 'sadtria1810',
                'password' => 'Sadtria1810',
                'level_user' => 'Kitchen',
                'nama' => 'Sadtria',
                'tgl_lahir' => '1994-10-18',
                'no_hp' => '081234567892',
                'alamat' => 'Jl. Kenanga No. 30, Surabaya',
                'gaji' => 5500000,
            ],
            [
                'username' => 'khairunisa1810',
                'password' => 'Khairunisa1810',
                'level_user' => 'Bartender',
                'nama' => 'Khairunisa',
                'tgl_lahir' => '1996-10-18',
                'no_hp' => '081234567893',
                'alamat' => 'Jl. Anggrek No. 40, Medan',
                'gaji' => 5200000,
            ],
            [
                'username' => 'pelangi1810',
                'password' => 'Pelangi1810',
                'level_user' => 'Pelayan',
                'nama' => 'Pelangi',
                'tgl_lahir' => '1998-10-18',
                'no_hp' => '081234567894',
                'alamat' => 'Jl. Dahlia No. 50, Yogyakarta',
                'gaji' => 5300000,
            ],
            [
                'username' => 'shanda1810',
                'password' => 'Shanda1810',
                'level_user' => 'Pelayan',
                'nama' => 'Shanda',
                'tgl_lahir' => '2000-10-18',
                'no_hp' => '081234567895',
                'alamat' => 'Jl. Teratai No. 60, Semarang',
                'gaji' => 5400000,
            ],
        ];

        foreach ($data as $item) {
            // Generate UUID
            $uuid = Str::uuid();

            // Insert into users table
            DB::table('users')->insert([
                'id_user' => $uuid,
                'level_user' => $item['level_user'],
                'created_at' => now(),
                'username' => $item['username'],
                'password' => Hash::make($item['password']),
            ]);

            // Insert into karyawan table
            DB::table('karyawan')->insert([
                'id_user' => $uuid,
                'nama' => $item['nama'],
                'tgl_lahir' => $item['tgl_lahir'],
                'no_hp' => $item['no_hp'],
                'alamat' => $item['alamat'],
                'gaji' => $item['gaji'],
                'foto' => null,
            ]);
        }
    }
}
