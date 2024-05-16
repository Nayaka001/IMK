<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori-menu')->insert([
            'kategori' => 'Crispy Steak with Brown Sauce',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Grill Steak',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Rice Hotplate Original',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Rice Hotplate Sambal Matah/Korek',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Nasi Geprek Sambal Matah/Korek',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Varian Geprek + Indomie',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Rice Bowl Sambal Matah/Korek',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Kids Meal',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Other Main Course',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Crispy Food',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Sayuran',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Snack Goreng',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Sweet',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Kukus',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Extra',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Tea & Lime',
            'jenis' => 'Minuman'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Other Beverages',
            'jenis' => 'Minuman'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Milkshake',
            'jenis' => 'Minuman'
        ]);

        DB::table('kategori-menu')->insert([
            'kategori' => 'Fresh Juice ',
            'jenis' => 'Minuman'
        ]);
    }
}
