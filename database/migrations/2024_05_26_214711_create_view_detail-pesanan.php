<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
    (SELECT COUNT(*) FROM `order-detail` od WHERE od.id_order = o.id_order) AS items,
    (SELECT GROUP_CONCAT(
            CONCAT(
                'Menu: ', m.nama_menu, 
                ', Jumlah: ', od.jumlah, 
                ', Subtotal: ', od.subtotal, ', ',
                od.progress,
                IF(od.note IS NOT NULL, CONCAT(', Note: ', od.note), '')
    ) 
    SEPARATOR '\n'
        )
     FROM `order-detail` od
     JOIN `menu` m ON od.id_menu = m.id_menu
     WHERE od.id_order = o.id_order
    ) AS detail_pesanan
FROM 
    `order` o
JOIN 
    `users` u ON o.id_user = u.id_user
JOIN 
    `karyawan` k ON u.id_user = k.id_user
;


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