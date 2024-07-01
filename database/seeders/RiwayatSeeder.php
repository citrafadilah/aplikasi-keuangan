<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RiwayatSeeder extends Seeder
{
    public function run()
    {
        DB::table('riwayat')->insert([
            [
                'jenis_transaksi' => 'pemasukan',
                'deskripsi' => 'Pajak Bumi dan Bangunan',
                'jumlah' => 10000000.00,
                'tanggal' => Carbon::create('2024', '01', '15'),
                'keterangan' => 'PBB triwulan pertama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pemasukan',
                'deskripsi' => 'Retribusi Pasar',
                'jumlah' => 2000000.00,
                'tanggal' => Carbon::create('2024', '02', '10'),
                'keterangan' => 'Retribusi pasar Januari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pemasukan',
                'deskripsi' => 'Bantuan Pemerintah',
                'jumlah' => 5000000.00,
                'tanggal' => Carbon::create('2024', '03', '05'),
                'keterangan' => 'Bantuan dana desa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pemasukan',
                'deskripsi' => 'Pajak Reklame',
                'jumlah' => 1500000.00,
                'tanggal' => Carbon::create('2024', '04', '20'),
                'keterangan' => 'Pajak reklame triwulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pemasukan',
                'deskripsi' => 'Sewa Gedung',
                'jumlah' => 3000000.00,
                'tanggal' => Carbon::create('2024', '05', '12'),
                'keterangan' => 'Sewa gedung serbaguna',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pengeluaran',
                'deskripsi' => 'Gaji Staf',
                'jumlah' => 15000000.00,
                'tanggal' => Carbon::create('2024', '01', '31'),
                'keterangan' => 'Gaji Januari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pengeluaran',
                'deskripsi' => 'Biaya Operasional Kantor',
                'jumlah' => 5000000.00,
                'tanggal' => Carbon::create('2024', '02', '15'),
                'keterangan' => 'Biaya listrik dan air',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pengeluaran',
                'deskripsi' => 'Pemeliharaan Gedung',
                'jumlah' => 3000000.00,
                'tanggal' => Carbon::create('2024', '03', '10'),
                'keterangan' => 'Perbaikan atap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pengeluaran',
                'deskripsi' => 'Pengadaan Alat Tulis Kantor',
                'jumlah' => 1000000.00,
                'tanggal' => Carbon::create('2024', '04', '05'),
                'keterangan' => 'Pembelian alat tulis baru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_transaksi' => 'pengeluaran',
                'deskripsi' => 'Biaya Rapat dan Kegiatan',
                'jumlah' => 2000000.00,
                'tanggal' => Carbon::create('2024', '05', '20'),
                'keterangan' => 'Biaya rapat bulanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
