<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meja')->insert([
            'id_meja' => 'M01',
            'keterangan' => null
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M02',
            'keterangan' => null
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M03',
            'status' => 'Dipesan',
            'keterangan' => 'Reservasi untuk pukul 13.00 WIB'
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M04',
            'status' => 'Digunakan',
            'keterangan' => null
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M05',
            'keterangan' => null
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M06',
            'status' => 'Dipesan',
            'keterangan' => 'Reservasi untuk pukul 20.00 WIB'
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M07',
            'status' => 'Digunakan',
            'keterangan' => null
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M08',
            'status' => 'Digunakan',
            'keterangan' => null
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M09',
            'status' => 'Digunakan',
            'keterangan' => null
        ]);

        DB::table('meja')->insert([
            'id_meja' => 'M10',
            'keterangan' => null
        ]);
    }
}
