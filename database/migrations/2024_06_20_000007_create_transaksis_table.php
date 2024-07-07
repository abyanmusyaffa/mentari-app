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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('pelanggan_id')->nullable();
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->nullOnDelete()->cascadeOnUpdate();
            $table->string('nama_pelanggan')->nullable();
            $table->string('hp_pelanggan')->nullable();
            $table->integer('diskon')->nullable();
            $table->string('metode');
            $table->string('status');
            $table->integer('diterima')->nullable();
            $table->integer('kembali')->nullable();
            $table->integer('total_diskon');
            $table->integer('grand_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
