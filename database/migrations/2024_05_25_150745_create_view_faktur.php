<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        DB::statement("
        CREATE VIEW faktur AS
        SELECT 
            o.id_order,
            o.tipe_order,
            o.tipe_pembayaran,
            o.nama_pelanggan,
            o.id_user AS kasir,
            o.jlh_org,
            o.id_meja,
            o.waktu_order,
            o.no_hp,
            o.kedatangan,
            GROUP_CONCAT(
                CONCAT(
                    'Menu: ', m.nama_menu, 
                    ', Jumlah: ', od.jumlah, 
                    ', Subtotal: ', od.subtotal, 
                    IF(od.note IS NOT NULL, CONCAT(', Note: ', od.note), '')
                ) 
                SEPARATOR '\n'
            ) AS order_details,
            SUM(od.subtotal) AS total
        FROM
            `order` o
        LEFT JOIN
            `order-detail` od ON o.id_order = od.id_order
        LEFT JOIN
            `menu` m ON od.id_menu = m.id_menu
        GROUP BY
            o.id_order, o.tipe_order, o.tipe_pembayaran, o.nama_pelanggan, o.id_user, o.jlh_org, o.id_meja, o.waktu_order, o.no_hp, o.kedatangan;
    ");
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS faktur;");
    }
};
