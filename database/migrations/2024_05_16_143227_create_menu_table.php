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
        Schema::create('menu', function (Blueprint $table) {
            $table->id('id_menu');
            $table->string('nama_menu', 250);
            $table->integer('harga');
            $table->unsignedBigInteger('id_ktgmenu');
            $table->foreign('id_ktgmenu')->references('id_ktgmenu')->on('kategori-menu')->onDelete('restrict')->onUpdate('restrict');
            $table->string('gambar_menu')->nullable();
            $table->text('keterangan')->nullable();

        });
    }

    /**
     

     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
