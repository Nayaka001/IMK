<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW detail_pesanan AS
        SELECT
            o.id_order,
            o.tipe_order,
            o.nama_pelanggan,
            o.id_meja,
            o.waktu_order,
            k.nama AS nama_kasir, 
            o.jlh_org,
            SUM(od.jumlah) AS items, 
            od.id_order_details,
            m.nama_menu,
            m.gambar_menu,
            od.jumlah,
            od.subtotal,
            od.progress,
            od.note
        FROM
            `order` o
        JOIN
            `order-detail` od ON o.id_order = od.id_order
        JOIN
            `karyawan` k ON o.id_user = k.id_user
        JOIN
            `menu` m ON od.id_menu = m.id_menu
        WHERE
            o.id_order IN (
                SELECT id_order
                FROM `order-detail`
                WHERE progress IN ('Dimasak', 'Siap Disajikan')
            )
        GROUP BY
            o.id_order, o.tipe_order, o.nama_pelanggan, o.id_meja, o.waktu_order, k.nama, o.jlh_org, od.id_order_details, m.nama_menu,m.gambar_menu, od.jumlah, od.subtotal, od.progress, od.note;
        

        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS detail_pesanan");
    }
};