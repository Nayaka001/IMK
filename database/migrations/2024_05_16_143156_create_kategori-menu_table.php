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
        Schema::create('kategori-menu', function (Blueprint $table) {
            $table->id('id_ktgmenu');
            $table->string('subkategori', 100);
            $table->string('kategori', 100);
            $table->enum('jenis', ['Makanan', 'Minuman']);
            $table->enum('status', ['Tersedia', 'Habis']);
            
        });
    }

    /**       
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori-menu');
    }
};
