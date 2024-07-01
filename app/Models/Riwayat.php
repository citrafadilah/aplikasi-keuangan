<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayat';

    protected $fillable = [
        'jenis_transaksi',
        'deskripsi',
        'jumlah',
        'tanggal',
        'keterangan',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function scopePemasukan($query)
    {
        return $query->where('jenis_transaksi', 'pemasukan');
    }
}
