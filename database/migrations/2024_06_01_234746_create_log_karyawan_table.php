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
        Schema::create('log_karyawan', function (Blueprint $table) {
            $table->id();
            $table->uuid('id_user');
            $table->string('nama_old', 250)->nullable();
            $table->string('nama_new', 250)->nullable();
            $table->date('tgl_lahir_old')->nullable();
            $table->date('tgl_lahir_new')->nullable();
            $table->string('no_hp_old', 14)->nullable();
            $table->string('no_hp_new', 14)->nullable();
            $table->text('alamat_old')->nullable();
            $table->text('alamat_new')->nullable();
            $table->integer('gaji_old')->nullable();
            $table->integer('gaji_new')->nullable();
            $table->string('foto_old')->nullable();
            $table->string('foto_new')->nullable();
            $table->string('action');
            $table->timestamp('updated_at')->useCurrent();
        });

        // Trigger for UPDATE
        DB::unprepared('
            CREATE TRIGGER trg_update_karyawan
            AFTER UPDATE ON karyawan
            FOR EACH ROW
            BEGIN
                INSERT INTO log_karyawan (id_user, nama_old, nama_new, tgl_lahir_old, tgl_lahir_new, no_hp_old, no_hp_new, alamat_old, alamat_new, gaji_old, gaji_new, foto_old, foto_new, action, updated_at)
                VALUES (OLD.id_user, OLD.nama, NEW.nama, OLD.tgl_lahir, NEW.tgl_lahir, OLD.no_hp, NEW.no_hp, OLD.alamat, NEW.alamat, OLD.gaji, NEW.gaji, OLD.foto, NEW.foto, "UPDATE", NOW());
            END
        ');

        // Trigger for DELETE
        DB::unprepared('
            CREATE TRIGGER trg_delete_karyawan
            AFTER DELETE ON karyawan
            FOR EACH ROW
            BEGIN
                INSERT INTO log_karyawan (id_user, nama_old, tgl_lahir_old, no_hp_old, alamat_old, gaji_old, foto_old, action, updated_at)
                VALUES (OLD.id_user, OLD.nama, OLD.tgl_lahir, OLD.no_hp, OLD.alamat, OLD.gaji, OLD.foto, "DELETE", NOW());
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_karyawan');
        DB::unprepared('DROP TRIGGER IF EXISTS trg_update_karyawan');
        DB::unprepared('DROP TRIGGER IF EXISTS trg_delete_karyawan');
    }
};
