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
        return  $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function satuans(): BelongsTo
    {
        return  $this->belongsTo(Satuan::class, 'satuan_id');
    }

    public function penjualans(): HasMany
    {
        return  $this->hasMany(Penjualan::class);
    }

    public function generateIdBarangs()
    {
        $lastCustomerId = $this->max('id');
        $lastNumber = $lastCustomerId ? intval(substr($lastCustomerId, 2)) : 0;
        $newNumber = str_pad($lastNumber + 1, 6, '0', STR_PAD_LEFT);
        return 'B-' . $newNumber; // Prepend 'B-'
    }
}
