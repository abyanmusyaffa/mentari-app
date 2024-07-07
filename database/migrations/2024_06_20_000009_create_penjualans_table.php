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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('transaksi_id');
            $table->foreign('transaksi_id')->references('id')->on('transaksis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('barang_id')->nullable();
            $table->foreign('barang_id')->references('id')->on('barangs')->nullOnDelete()->cascadeOnUpdate();
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
