<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaksis(): BelongsTo
    {
        return  $this->belongsTo(Transaksi::class);
    }

    public function barangs(): BelongsTo
    {
        return  $this->belongsTo(Barang::class);
    }
}
