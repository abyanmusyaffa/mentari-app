<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama', 'kategori_id', 'satuan_id', 'harga', 'stok'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function kategoris(): BelongsTo
    {
        return  $this->belongsTo(Kategori::class);
    }

    public function satuans(): BelongsTo
    {
        return  $this->belongsTo(Satuan::class);
    }

    public function penjulans(): HasMany
    {
        return  $this->hasMany(Penjualan::class);
    }
}
