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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('transaksi_id')->nullable();
            $table->foreign('transaksi_id')->references('id')->on('transaksis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_pelanggan');
            $table->string('hp_pelanggan')->nullable();
            $table->string('status');
            $table->timestamp('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
