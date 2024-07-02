<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $table = 'pemasukan';

    protected $fillable = [
        'sumber_pemasukan',
        'jumlah',
        'tanggal',
        'keterangan',
    ];

    public function riwayat()
    {
        return $this->morphOne(Riwayat::class, 'transaksi');
    }
}
