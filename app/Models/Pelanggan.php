<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama', 'alamat', 'hp', 'diskon'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }

    public function generateId()
    {
        $yearMonth = date('ym');
        $lastCustomerId = $this->max('id');
        $lastNumber = $lastCustomerId ? intval(substr($lastCustomerId, -5)) : 0;
        $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        return 'P-' . $yearMonth . $newNumber;
    }
}
