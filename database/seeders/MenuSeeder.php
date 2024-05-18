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
        //SEEDER KATEGORI-MENU
        DB::table('kategori-menu')->insert([
            'subkategori' => 'Crispy Steak with Brown Sauce',
            'kategori' => 'STEAKS & HOTPLATES',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Grill Steak',
            'kategori' => 'STEAKS & HOTPLATES',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Rice Hotplate Original',
            'kategori' => 'RICE HOTPLATE',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Rice Hotplate Sambal Matah/Korek',
            'kategori'  => 'RICE HOTPLATE',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Nasi Geprek Sambal Matah/Korek',
            'kategori' => 'GEPREK',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Varian Geprek + Indomie',
            'kategori' => 'GEPREK',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Rice Bowl Sambal Matah/Korek',
            'kategori' => 'GEPREK',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Kids Meal',
            'kategori' => 'KIDS MEAL',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Hotplate Indomie',
            'kategori' => 'STEAKS & HOTPLATES',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Crispy Food',
            'kategori' => 'CEMILAN',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Sayuran',
            'kategori' => 'SAYURAN',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Snack Goreng',
            'kategori' => 'CEMILAN',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Sweet',
            'kategori' => 'CEMILAN',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Kukus',
            'kategori' => 'CEMILAN',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Extra',
            'kategori'  => 'GEPREK',
            'jenis' => 'Makanan'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Tea & Lime',
            'kategori' => 'MINUMAN',
            'jenis' => 'Minuman'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Other Beverages',
            'kategori' => 'MINUMAN',
            'jenis' => 'Minuman'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Milkshake',
            'kategori' => 'MINUMAN',
            'jenis' => 'Minuman'
        ]);

        DB::table('kategori-menu')->insert([
            'subkategori' => 'Fresh Juice ',
            'kategori' => 'MINUMAN',
            'jenis' => 'Minuman'
        ]);

        //SEEDER MENU
        DB::table('menu')->insert([
            'nama_menu' => 'Junior Rice Crispy Chicken',
            'harga' => '9000',
            'id_ktgmenu' => 8,
            'gambar_menu' => 'KM1.png',
            'keterangan' => 'Nasi + Ayam Crispy'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Junior Rice Crispy Chicken Spesial',
            'harga' => 12000,
            'id_ktgmenu' => 8,
            'gambar_menu' => 'KM2.png',
            'keterangan' => 'Nasi + Ayam Crispy + Telur'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Junior Rice Chicken Soup',
            'harga' => 10000,
            'id_ktgmenu' => 8,
            'gambar_menu' => 'KM5.png',
            'keterangan' => 'Nasi + Sop Ayam'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Tumis Jamur',
            'harga' => 7000,
            'id_ktgmenu' => 11,
            'gambar_menu' => 'S1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Tumis Kangkung',
            'harga' => 7000,
            'id_ktgmenu' => 11,
            'gambar_menu' => 'S2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Chicken Grill',
            'harga' => 18000,
            'id_ktgmenu' => 2,
            'gambar_menu' => 'GS1.png',
            'keterangan' => 'Chicken Grill + Sayur + Kentang + Blackpaper Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Beef Grill',
            'harga' => 31000,
            'id_ktgmenu' => 2,
            'gambar_menu' => 'GS2.png',
            'keterangan' => 'Beef Grill + Sayur + Kentang + Blackpaper Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Dori Grill',
            'harga' => 19000,
            'id_ktgmenu' => 2,
            'gambar_menu' => 'GS3.png',
            'keterangan' => 'Dori Grill + Sayur + Kentang + Blackpaper Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Chicken Steak Crispy',
            'harga' => 10000,
            'id_ktgmenu' => 1,
            'gambar_menu' => 'CS1.png',
            'keterangan' => 'Ayam Fillet Crispy + Sayur + Kentang + Brown Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Beef Steak Crispy',
            'harga' => 22000,
            'id_ktgmenu' => 1,
            'gambar_menu' => 'CS2.png',
            'keterangan' => 'Beef Crispy + Sayur + Kentang + Brown Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Dori Steak Crispy',
            'harga' => 13000,
            'id_ktgmenu' => 1,
            'gambar_menu' => 'CS3.png',
            'keterangan' => 'Dori Crispy + Sayur + Kentang + Brown Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Steak Annisa',
            'harga' => 22000,
            'id_ktgmenu' => 1,
            'gambar_menu' => 'CS7.png',
            'keterangan' => 'Ayam Fillet Crispy + Udang Crispy + Cumi Crispy + Sayur + Kentang + Brown Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Hotplate Indomie Goreng',
            'harga' => 12000,
            'id_ktgmenu' => 9,
            'gambar_menu' => 'HI1.png',
            'keterangan' => 'Indomie Goreng + Telur + Sayur'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Hotplate Indomie Kuah',
            'harga' => 12000,
            'id_ktgmenu' => 9,
            'gambar_menu' => 'HI2.png',
            'keterangan' => 'Indomie Kuah + Telur + Sayur'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Chicken Steak Original',
            'harga' => 10000,
            'id_ktgmenu' => 3,
            'gambar_menu' => 'RHO1.png',
            'keterangan' => 'Nasi + Ayam Fillet Crispy + Sayur + Brown Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Beef Steak Original',
            'harga' => 22000,
            'id_ktgmenu' => 3,
            'gambar_menu' => 'RHO2.png',
            'keterangan' => 'Nasi + Beef Crispy + Sayur + Brown Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Shrimp Steak Original',
            'harga' => 13000,
            'id_ktgmenu' => 3,
            'gambar_menu' => 'RHO3.png',
            'keterangan' => 'Nasi + Udang Crispy + Sayur + Brown Sauce'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Chicken Steak',
            'harga' => 11000,
            'id_ktgmenu' => 4,
            'gambar_menu' => 'RHS1.png',
            'keterangan' => 'Nasi + Ayam Fillet Crispy + Sayur + Brown Sauce + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Beef Steak',
            'harga' => 23000,
            'id_ktgmenu' => 4,
            'gambar_menu' => 'RHS2.png',
            'keterangan' => 'Nasi + Beef Crispy + Sayur + Brown Sauce + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Shrimp Steak',
            'harga' => 14000,
            'id_ktgmenu' => 4,
            'gambar_menu' => 'RHS3.png',
            'keterangan' => 'Nasi + Shrimp Crispy + Sayur + Brown Sauce + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Ayam Geprek',
            'harga' => 10000,
            'id_ktgmenu' => 5,
            'gambar_menu' => 'NG1.png',
            'keterangan' => 'Nasi + Ayam Crispy + Lalapan + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Udang Geprek',
            'harga' => 10000,
            'id_ktgmenu' => 5,
            'gambar_menu' => 'NG2.png',
            'keterangan' => 'Nasi + Udang Crispy + Lalapan + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Cumi Geprek',
            'harga' => 13000,
            'id_ktgmenu' => 5,
            'gambar_menu' => 'G3.png',
            'keterangan' => 'Nasi + Cumi Crispy + Lalapan + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Ayam Geprek Indomie',
            'harga' => 13000,
            'id_ktgmenu' => 6,
            'gambar_menu' => 'VGI1.png',
            'keterangan' => 'Nasi + Indomie + Ayam Crispy + Lalapan + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Udang Geprek Indomie',
            'harga' => 16000,
            'id_ktgmenu' => 6,
            'gambar_menu' => 'VGI2.png',
            'keterangan' => 'Nasi + Indomie + Udang Crispy + Lalapan + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Cumi Geprek Indomie',
            'harga' => 13000,
            'id_ktgmenu' => 6,
            'gambar_menu' => 'VGI3.png',
            'keterangan' => 'Nasi + Indomie + Cumi Crispy + Lalapan + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Bowl Chicken',
            'harga' => 10000,
            'id_ktgmenu' => 7,
            'gambar_menu' => 'RBS1.png',
            'keterangan' => 'Nasi + Ayam Crispy + Lalapan + Sambal Matah/Korek'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Rice Bowl Chicken Spesial',
            'harga' => 13000,
            'id_ktgmenu' => 7,
            'gambar_menu' => 'RBS2.png',
            'keterangan' => 'Nasi + Ayam Crispy + Lalapan + Sambal Matah/Korek + Telur'
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi',
            'harga' => 3000,
            'id_ktgmenu' => 15,
            'gambar_menu' => 'E1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Mie',
            'harga' => 5000,
            'id_ktgmenu' => 15,
            'gambar_menu' => 'E2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Telur',
            'harga' => 4000,
            'id_ktgmenu' => 15,
            'gambar_menu' => 'E3.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Sambal Matah/Kore',
            'harga' => 2000,
            'id_ktgmenu' => 15,
            'gambar_menu' => 'E4.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Ayam Goreng Crispy',
            'harga' => 13000,
            'id_ktgmenu' => 10,
            'gambar_menu' => 'CF1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Udang Goreng Crispy',
            'harga' => 10000,
            'id_ktgmenu' => 10,
            'gambar_menu' => 'CF2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Cumi Goreng Crispy',
            'harga' => 10000,
            'id_ktgmenu' => 10,
            'gambar_menu' => 'CF3.png',
            'keterangan' => null
        ]);
    
        DB::table('menu')->insert([
            'nama_menu' => 'Kulit Ayam Crispy',
            'harga' => 8000,
            'id_ktgmenu' => 12,
            'gambar_menu' => 'SG1.png',
            'keterangan' => null
        ]);
    
        DB::table('menu')->insert([
            'nama_menu' => 'Kentang Goreng',
            'harga' => 10000,
            'id_ktgmenu' => 12,
            'gambar_menu' => 'SG2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Chicken Nugget',
            'harga' => 10000,
            'id_ktgmenu' => 12,
            'gambar_menu' => 'SG3.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Silky Puding Coklat',
            'harga' => 3000,
            'id_ktgmenu' => 13,
            'gambar_menu' => 'SW1.png',
            'keterangan' => null
        ]);
    
        DB::table('menu')->insert([
            'nama_menu' => 'Silky Puding Strawberry',
            'harga' => 3000,
            'id_ktgmenu' => 13,
            'gambar_menu' => 'SW2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Silky Puding Jeruk',
            'harga' => 3000,
            'id_ktgmenu' => 13,
            'gambar_menu' => 'SW3.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Dimsum Ayam',
            'harga' => 10000,
            'id_ktgmenu' => 14,
            'gambar_menu' => 'D1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Dimsum Udang',
            'harga' => 10000,
            'id_ktgmenu' => 14,
            'gambar_menu' => 'D2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Dimsum Rumput Laut',
            'harga' => 10000,
            'id_ktgmenu' => 14,
            'gambar_menu' => 'D3.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Teh Manis',
            'harga' => 5000,
            'id_ktgmenu' => 16,
            'gambar_menu' => 'TL1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Lemon Tea',
            'harga' => 6000,
            'id_ktgmenu' => 16,
            'gambar_menu' => 'TL2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Teh Tarik',
            'harga' => 6000,
            'id_ktgmenu' => 16,
            'gambar_menu' => 'TL3.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Cincau Susu',
            'harga' => 7000,
            'id_ktgmenu' => 17,
            'gambar_menu' => 'OB1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Milo',
            'harga' => 76000,
            'id_ktgmenu' => 17,
            'gambar_menu' => 'OB2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Chocolatos',
            'harga' => 6000,
            'id_ktgmenu' => 17,
            'gambar_menu' => 'OB3.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Milkshake Coklat',
            'harga' => 9000,
            'id_ktgmenu' => 18,
            'gambar_menu' => 'M1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Milkshake Vanila',
            'harga' => 9000,
            'id_ktgmenu' => 18,
            'gambar_menu' => 'M2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Milkshake Strawberry',
            'harga' => 9000,
            'id_ktgmenu' => 18,
            'gambar_menu' => 'M3.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Terong Belanda',
            'harga' => 7000,
            'id_ktgmenu' => 19,
            'gambar_menu' => 'FJ1.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Alpukat',
            'harga' => 7000,
            'id_ktgmenu' => 19,
            'gambar_menu' => 'FJ2.png',
            'keterangan' => null
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Sirsak',
            'harga' => 7000,
            'id_ktgmenu' => 19,
            'gambar_menu' => 'FJ4.png',
            'keterangan' => null
        ]);
    }


}
