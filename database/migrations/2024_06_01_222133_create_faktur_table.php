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
        Schema::create('faktur', function (Blueprint $table) {
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('order')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('total_uang');
            $table->integer('kembalian');
            

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faktur');
    }
};
