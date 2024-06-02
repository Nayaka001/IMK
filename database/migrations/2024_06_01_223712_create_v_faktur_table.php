<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('
            CREATE VIEW v_faktur AS
            SELECT 
                o.id_order AS order_no,
                k.nama AS nama_kasir,
                o.waktu_order,
                o.nama_pelanggan,
                o.tipe_order,
                o.tipe_pembayaran,
                m.nama_menu,
                od.jumlah,
                m.harga,
                od.subtotal,
                SUM(od.subtotal) OVER(PARTITION BY o.id_order) AS total,
                f.total_uang AS bayar,
                f.kembalian AS kembali
            FROM 
                `order` o
            JOIN 
                `karyawan` k ON o.id_user = k.id_user
            JOIN 
                `order-detail` od ON o.id_order = od.id_order
            JOIN 
                `menu` m ON od.id_menu = m.id_menu
            JOIN 
                `faktur` f ON o.id_order = f.id_order
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS v_faktur');
    }
};
