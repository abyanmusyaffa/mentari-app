<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pelanggan;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'pelanggan_id', 'nama_pelanggan','hp_pelanggan', 'diskon','metode', 'status', 'diterima', 'kembali', 'total_diskon', 'grand_total'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function pelanggans(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    }
    
    public function penjualans(): HasMany
    {
        return $this->hasMany(Pelanggan::class);
    }
    public function pesanans(): HasOne
    {
        return $this->hasOne(Pesanan::class);
    }
    
    public function generateIdPenjualan()
    {
        $date = date('ymd');
        $lastPenjualanId = $this->where('id', 'like', 'TPJ-%')->max('id');
        $lastNumber = $lastPenjualanId ? intval(substr($lastPenjualanId, -5)) : 0;
        $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        return 'TPJ-' . $date . $newNumber;
    }
    
    public function generateIdPesanan()
    {
        $date = date('ymd');
        $lastPesananId = $this->where('id', 'like', 'TPS-%')->max('id');
        $lastNumber = $lastPesananId ? intval(substr($lastPesananId, -5)) : 0;
        $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        return 'TPS-' . $date . $newNumber;
    }

    public function getMoneyFormatAttribute()
    {
        return 'Rp ' . number_format($this->jumlah, 0, ',', '.');
    }
}
