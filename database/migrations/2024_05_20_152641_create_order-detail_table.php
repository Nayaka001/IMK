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
        Schema::create('order-detail', function (Blueprint $table) {
            $table->id('id_order_details');
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('order')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_menu');
            $table->foreign('id_menu')->references('id_menu')->on('menu')->onDelete('restrict')->onUpdate('restrict');
            $table->text('note')->nullable();
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->enum('progress', ['Dimasak', 'Siap Disajikan', 'Selesai']);

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order-detail');
    }
};
