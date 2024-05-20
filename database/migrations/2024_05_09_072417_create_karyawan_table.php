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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->uuid('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama', 250);
            $table->date('tgl_lahir');
            $table->string('no_hp', 14)->unique();
            $table->text('alamat');
            $table->integer('gaji');
            $table->binary('dokumen')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
