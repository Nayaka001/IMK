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
        Schema::create('log_menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu')->nullable();
            $table->string('nama_menu_old', 250)->nullable();
            $table->string('nama_menu_new', 250)->nullable();
            $table->integer('harga_old')->nullable();
            $table->integer('harga_new')->nullable();
            $table->unsignedBigInteger('id_ktgmenu_old')->nullable();
            $table->unsignedBigInteger('id_ktgmenu_new')->nullable();
            $table->string('gambar_menu_old')->nullable();
            $table->string('gambar_menu_new')->nullable();
            $table->text('keterangan_old')->nullable();
            $table->text('keterangan_new')->nullable();
            $table->string('action');
            $table->timestamp('updated_at')->useCurrent();
        });

        // Trigger for UPDATE
        DB::unprepared('
            CREATE TRIGGER trg_update_menu
            AFTER UPDATE ON menu
            FOR EACH ROW
            BEGIN
                INSERT INTO log_menu (id_menu, nama_menu_old, nama_menu_new, harga_old, harga_new, id_ktgmenu_old, id_ktgmenu_new, gambar_menu_old, gambar_menu_new, keterangan_old, keterangan_new, action, updated_at)
                VALUES (OLD.id_menu, OLD.nama_menu, NEW.nama_menu, OLD.harga, NEW.harga, OLD.id_ktgmenu, NEW.id_ktgmenu, OLD.gambar_menu, NEW.gambar_menu, OLD.keterangan, NEW.keterangan, "UPDATE", NOW());
            END
        ');

        // Trigger for DELETE
        DB::unprepared('
            CREATE TRIGGER trg_delete_menu
            AFTER DELETE ON menu
            FOR EACH ROW
            BEGIN
                INSERT INTO log_menu (id_menu, nama_menu_old, harga_old, id_ktgmenu_old, gambar_menu_old, keterangan_old, action, updated_at)
                VALUES (OLD.id_menu, OLD.nama_menu, OLD.harga, OLD.id_ktgmenu, OLD.gambar_menu, OLD.keterangan, "DELETE", NOW());
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_menu');
        DB::unprepared('DROP TRIGGER IF EXISTS trg_update_menu');
        DB::unprepared('DROP TRIGGER IF EXISTS trg_delete_menu');
    }
};
