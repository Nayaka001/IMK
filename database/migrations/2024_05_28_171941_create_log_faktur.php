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
        Schema::create('log-faktur', function (Blueprint $table) {
            $table->integer('id_order');
            $table->string('tipe_order');
            $table->string('tipe_pembayaran');
            $table->string('nama_pelanggan');
            $table->integer('kasir');
            $table->integer('jlh_org');
            $table->integer('id_meja')->nullable();
            $table->timestamp('waktu_order');
            $table->string('no_hp')->nullable();
            $table->string('kedatangan')->nullable();
            $table->text('order_details');
            $table->decimal('total', 15, 2);
            $table->timestamps();
        });

        DB::statement("
            CREATE TRIGGER before_delete_order
            BEFORE DELETE ON `order` 
            FOR EACH ROW
            BEGIN
                INSERT INTO log (id_order, tipe_order, tipe_pembayaran, nama_pelanggan, kasir, jlh_org, id_meja, waktu_order, no_hp, kedatangan, order_details, total, created_at, updated_at)
                SELECT 
                    OLD.id_order,
                    OLD.tipe_order,
                    OLD.tipe_pembayaran,
                    OLD.nama_pelanggan,
                    OLD.id_user AS kasir,
                    OLD.jlh_org,
                    OLD.id_meja,
                    OLD.waktu_order,
                    OLD.no_hp,
                    OLD.kedatangan,
                    GROUP_CONCAT(
                        CONCAT(
                            'Menu: ', m.nama_menu, 
                            ', Jumlah: ', od.jumlah, 
                            ', Subtotal: ', od.subtotal, 
                            IF(od.note IS NOT NULL, CONCAT(', Note: ', od.note), '')
                        ) 
                        SEPARATOR '\n'
                    ) AS order_details,
                    SUM(od.subtotal) AS total,
                    NOW(),
                    NOW()
                FROM
                    `order` o
                LEFT JOIN
                    `order-detail` od ON o.id_order = od.id_order
                LEFT JOIN
                    `menu` m ON od.id_menu = m.id_menu
                WHERE
                    o.id_order = OLD.id_order
                GROUP BY
                    o.id_order, o.tipe_order, o.tipe_pembayaran, o.nama_pelanggan, o.id_user, o.jlh_org, o.id_meja, o.waktu_order, o.no_hp, o.kedatangan;
            END;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log');

        DB::statement("DROP TRIGGER IF EXISTS before_delete_order;");
    }
};