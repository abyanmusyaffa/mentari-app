<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'transaksi_id', 'pelanggan_id', 'status', 'waktu'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function transaksis(): BelongsTo
    {
        return  $this->belongsTo(Transaksi::class);
    }
    
    public function detail_pesanans(): HasMany
    {
        return  $this->hasMany(DetailPesanan::class);
    }

    public function generateIdPesanans()
    {
        $date = date('ymd');
        $lastCustomerId = $this->max('id');
        $lastNumber = $lastCustomerId ? intval(substr($lastCustomerId, -5)) : 0;
        $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        return 'PS-' . $date . $newNumber;
    }
}
