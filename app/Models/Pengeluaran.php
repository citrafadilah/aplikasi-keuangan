<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';

    protected $fillable = [
        'deskripsi',
        'jumlah',
        'tanggal',
        'keterangan',
    ];

    public function riwayat()
    {
        return $this->morphOne(Riwayat::class, 'transaksi');
    }
}
