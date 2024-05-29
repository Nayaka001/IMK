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
        Schema::create('order', function (Blueprint $table) {
            $table->id('id_order');
            $table->enum('tipe_order', ['Makan di Tempat', 'Reservasi', 'Bawa Pulang']);
            $table->enum('tipe_pembayaran', ['Tunai', 'NonTunai']);
            $table->uuid('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade'); //KASIR
            $table->string('nama_pelanggan', 100);
            $table->integer('jlh_org')->nullable(); //DINE IN & RESERVASI
            $table->char('id_meja', 3)->nullable(); //DINE IN & RESERVASI
            $table->foreign('id_meja')->references('id_meja')->on('meja')->onDelete('restrict')->onUpdate('restrict'); //DINE IN & RESERVASI
            $table->timestamp('waktu_order')->useCurrent();
            $table->string('no_hp', 14)->nullable();//RESERVASI
            $table->timestamp('kedatangan')->nullable(); //RESERVASI
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};