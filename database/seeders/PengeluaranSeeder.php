<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengeluaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengeluaran')->insert([
            [
                'jenis_pengeluaran' => 'Gaji Staf',
                'jumlah' => 15000000.00,
                'tanggal' => Carbon::create('2024', '01', '31'),
                'keterangan' => 'Gaji Januari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_pengeluaran' => 'Biaya Operasional Kantor',
                'jumlah' => 5000000.00,
                'tanggal' => Carbon::create('2024', '02', '15'),
                'keterangan' => 'Biaya listrik dan air',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_pengeluaran' => 'Pemeliharaan Gedung',
                'jumlah' => 3000000.00,
                'tanggal' => Carbon::create('2024', '03', '10'),
                'keterangan' => 'Perbaikan atap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_pengeluaran' => 'Pengadaan Alat Tulis Kantor',
                'jumlah' => 1000000.00,
                'tanggal' => Carbon::create('2024', '04', '05'),
                'keterangan' => 'Pembelian alat tulis baru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_pengeluaran' => 'Biaya Kegiatan Sosial',
                'jumlah' => 2500000.00,
                'tanggal' => Carbon::create('2024', '05', '20'),
                'keterangan' => 'Kegiatan bakti sosial',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
