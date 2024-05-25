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
            CREATE VIEW dimasak_orders AS
            SELECT 
                od.id_order_details,
                o.id_order,
                o.tipe_order,
                o.tipe_pembayaran,
                o.nama_pelanggan,
                o.jlh_org,
                o.id_meja,
                o.waktu_order,
                o.no_hp,
                o.kedatangan,
                m.nama_menu,
                od.jumlah,
                od.subtotal,
                od.note,
                od.progress
            FROM
                `order-detail` od
            INNER JOIN
                `order` o ON od.id_order = o.id_order
            INNER JOIN
                `menu` m ON od.id_menu = m.id_menu
            WHERE
                od.progress = 'Dimasak';
        ");

        DB::statement("
            CREATE VIEW disajikan_orders AS
            SELECT 
                od.id_order_details,
                o.id_order,
                o.tipe_order,
                o.tipe_pembayaran,
                o.nama_pelanggan,
                o.jlh_org,
                o.id_meja,
                o.waktu_order,
                o.no_hp,
                o.kedatangan,
                m.nama_menu,
                od.jumlah,
                od.subtotal,
                od.note,
                od.progress
            FROM
                `order-detail` od
            INNER JOIN
                `order` o ON od.id_order = o.id_order
            INNER JOIN
                `menu` m ON od.id_menu = m.id_menu
            WHERE
                od.progress = 'Siap Disajikan';
        ");

        DB::statement("
            CREATE VIEW selesai_orders AS
            SELECT 
                od.id_order_details,
                o.id_order,
                o.tipe_order,
                o.tipe_pembayaran,
                o.nama_pelanggan,
                o.jlh_org,
                o.id_meja,
                o.waktu_order,
                o.no_hp,
                o.kedatangan,
                m.nama_menu,
                od.jumlah,
                od.subtotal,
                od.note,
                od.progress
            FROM
                `order-detail` od
            INNER JOIN
                `order` o ON od.id_order = o.id_order
            INNER JOIN
                `menu` m ON od.id_menu = m.id_menu
            WHERE
                od.progress = 'Selesai';
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS cooking_orders;");
        DB::statement("DROP VIEW IF EXISTS serving_orders;");
        DB::statement("DROP VIEW IF EXISTS completed_orders;");
    }
};








