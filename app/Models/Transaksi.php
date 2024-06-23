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

    protected $fillable = ['id', 'pelanggan_id', 'nama_pelanggan', 'metode', 'status', 'diterima', 'kembali', 'total_diskon', 'grand_total'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function pelanggans(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
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
        $lastCustomerId = $this->max('id');
        $lastNumber = $lastCustomerId ? intval(substr($lastCustomerId, -5)) : 0;
        $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        return 'TPJ-' . $date . $newNumber;
    }

    public function generateIdPesanan()
    {
        $date = date('ymd');
        $lastCustomerId = $this->max('id');
        $lastNumber = $lastCustomerId ? intval(substr($lastCustomerId, -5)) : 0;
        $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        return 'TPS-' . $date . $newNumber;
    }
}
